<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cart;
use App\Book;
use App\Category;

class CartsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id=auth()->user()->id;
        $cart_books=Cart::where('user_id','=',$user_id)->get();
        $cart_total=Cart::where('user_id','=',$user_id)->sum('total');
        $item=Cart::where('user_id','=',$user_id)->count();
        $categories=Category::all();
        return view('layouts.cart',compact('cart_books','cart_total','item','categories'));
    }

    public function store(Request $request)
    {
        $user_id=auth()->user()->id;
        $book_id=$request->book;
        $amount=$request->amount;        
        $book=Book::find($book_id);
        $net=$book->price-$book->discount;
        $total=$amount*$net;
        
        if($amount>$book->qty)
        {
        return redirect()->back()->with('message','Sorry..The quantity you are requesting is not in stock...please try for a lesser quantity!');
        }
        $cart=new Cart;
        $cart->user_id=$user_id;
        $cart->book_id=$book_id;
        $cart->amount=$amount;
        $cart->total=$total;
        $cart->save();

        return redirect('/cart');
    }

    
    public function update(Request $request)
    {
        $user_id=auth()->user()->id;
        $cart=Cart::find($request->cart_id);
        $book=Book::find($cart->book_id);
        $net=$cart->book->price-$cart->book->discount;
        $cart_total=$request->quantity*$net;
        if($request->quantity>$book->qty)
        {
            $cart = array('error'=>'Sorry..The quantity you are requesting is not in stock...please try for a lesser quantity!','amount' => $cart->amount);
            return response()->json(['success' => '', 'result'=>$cart]);
        }
        else
        {
            Cart::where('id', $request->cart_id)->update(['amount' => $request->quantity,'total' =>$cart_total
            ]);
            $cart_total=Cart::where('user_id','=',$user_id)->sum('total');
            $cart=Cart::find($request->cart_id);
            return response()->json(['success' => 'true', 'result'=>$cart ,'total' =>$cart_total]);
        }
    }

    public function destroy($id)
    {
        $cart=Cart::find($id);
        $cart->delete();
        return redirect()->back();
    }
}
