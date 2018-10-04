<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\Cart;
use App\Category;


class BooksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {
        $book=Book::find($id);
        $user_id=auth()->user()->id;
        $carts=Cart::where('user_id','=',$user_id)->get();
        $item=Cart::where('user_id','=',$user_id)->count();
        $categories=Category::all();
        return view('layouts.product',compact('book','item','categories','carts'));
    }
}
