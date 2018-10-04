<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cart;
use App\Category;
use App\Order;
use App\Book;
use App\Transaction;
use Mail;
use App\Mail\OrderPlaced;
use App\Mail\orderFailed;

use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;

class CheckoutController extends Controller
{
    public function index()
    {
        $user_id=auth()->user()->id;
        $cart_total=Cart::where('user_id','=',$user_id)->sum('total');
        $item=Cart::where('user_id','=',$user_id)->count();
        $categories=Category::all();
        return view('layouts.checkout',compact('user_id','cart_total','item','categories'));
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'name'=>'required|max:30',
            'email'=>'required|email',
            'address'=>'required',
            'state'=>'required',
            'city'=>'required',
            'zip'=>'required|max:6',
            'contact'=>'required|max:10',
            'cname'=>'required',
            'caddress'=>'required'
        ]);
        
        $user_id=auth()->user()->id;
        $user_name=auth()->user()->name;
        $cart=Cart::where('user_id','=',$user_id)->get();
        $cart_total=$cart->sum('total');
        $contents = Cart::select('book_id','amount')->where('user_id','=',$user_id)->get()->toJson();
        $cart_books=Cart::with('book')->where('user_id','=',$user_id)->get();
        $cart_total_item=$cart->sum('amount');
        try 
        {
            $charge = Stripe::charges()->create([
                'amount' => $cart_total,
                'currency' => 'INR',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                     'contents' => $contents,
                     'quantity' => $cart_total_item,
                     'user_id'  => $user_id,
                    
                ],
            ]);
            $outcome = $charge["outcome"];
            $transaction=Transaction::create([
                'id'=>$charge["id"],
                'user_id'=>$user_id,
                'status'=>$charge["status"],
                'message'=>$outcome["seller_message"]
            ]);
            $order=Order::create([
                'user_id'=>$user_id,
                'name'=>$request->name,
                'email'=>$request->email,
                'contact_number'=>$request->contact,
                'state'=>$request->state,
                'city'=>$request->city,
                'zip'=>$request->zip,
                'address'=>$request->address,
                'total'=>$cart_total,
                'transactions_id'=>$charge["id"],
                'transactions_status'=>$charge["status"]
            ]);
            foreach($cart_books as $cart_book)
            {
                $net_price=$cart_book->book->price-$cart_book->book->discount;
                $order->orderItem()->attach($cart_book->book_id,[
                        'amount'=>$cart_book->amount,
                        'price'=>$cart_book->book->price,
                        'total'=>$net_price*$cart_book->amount
                    ]);
            }
            foreach($cart_books as $cart_book)
            {
                $qty=$cart_book->book->qty-$cart_book->amount;
                Book::where('id', $cart_book->book->id)
                ->update(['qty' => $qty]);
            }
            Mail::send(new OrderPlaced($user_name,$order,$cart_books));
            Cart::where('user_id','=',$user_id)->delete();
            return redirect()->route('confirmation.index')->with('charge',$charge);
            
        } catch (CardErrorException $e) {
            $body = $e->getrawOutput();
             $err  = $body['error'];
             $transaction=Transaction::create([
                'id'=>$err["charge"],
                'user_id'=>$user_id,
                'status'=>$err["code"],
                'message'=>$err["message"]
            ]);
            $order=Order::create([
                'user_id'=>$user_id,
                'name'=>$request->name,
                'email'=>$request->email,
                'contact_number'=>$request->contact,
                'state'=>$request->state,
                'city'=>$request->city,
                'zip'=>$request->zip,
                'address'=>$request->address,
                'total'=>$cart_total,
                'status'=>2,
                'transactions_id'=>$err["charge"],
                'transactions_status'=>"Failed"
            ]);
            Mail::send(new orderFailed($user_name,$order));
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }
}
