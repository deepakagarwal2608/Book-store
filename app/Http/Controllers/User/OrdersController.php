<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cart;
Use App\Category;
Use App\Order;
use App\Book;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id=auth()->user()->id;
        $item=Cart::where('user_id','=',$user_id)->count();
        $categories=Category::all();
        $orders=Order::where('user_id','=',$user_id)->orderBy('created_at', 'desc')->paginate(10);
        return view('layouts.orders',compact('item','categories','orders'));
    }
    public function show($id)
    {
        $user_id=auth()->user()->id;
        $item=Cart::where('user_id','=',$user_id)->count();
        $categories=Category::all();
        $orders=Order::with('orderItem')->where('user_id','=',$user_id)->find($id);
        return view('layouts.order',compact('item','categories','orders'));
    }

}
