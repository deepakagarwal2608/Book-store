<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\Cart;
use App\Category;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {
        $category=Category::find($id);
        $title=$category->name;
        $books=Book::where('category_id','=',$id)->orderBy('created_at', 'desc')->paginate(10);
        $user_id=auth()->user()->id;
        $carts=Cart::where('user_id','=',$user_id)->get();
        $item=Cart::where('user_id','=',$user_id)->count();
        $categories=Category::all();
        return view('layouts.index',compact('books','item','categories','carts','title'));
    }

}
