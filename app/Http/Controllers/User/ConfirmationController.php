<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cart;
use App\Category;
use Session;

class ConfirmationController extends Controller
{

    public function index()
    {
        
        $user_id=auth()->user()->id;
        $item=Cart::where('user_id','=',$user_id)->count();
        $categories=Category::all();
        return view('layouts.thankyou',compact('item','categories'));
    }
}
