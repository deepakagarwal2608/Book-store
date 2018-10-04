<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Cart;
use App\Category;

class HomeController extends Controller
{
    public function index()
   	{
      $title="Books";
      $books=Book::orderBy('created_at', 'desc')->paginate(12);
      
   		if(auth()->guest())
   		{
   			return redirect('/login');
   		}
      
      $user_id=auth()->user()->id;
      $carts=Cart::where('user_id','=',$user_id)->get();
      $item=Cart::where('user_id','=',$user_id)->count();
      $categories=Category::all();
		return view('layouts.index',compact('books','item','categories','carts','title'));
   	}    
}
