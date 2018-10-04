<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Category;
use Hash;


class SignupController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $item=0;
        $categories=Category::all();
        return view('auth.signup',compact('item','categories'));
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'name'=>'required|max:30',
            'email'=>'required|email|unique:users',
            'contact'=>'required|unique:users',
            'password'=>'required|min:6|confirmed',
            'Image'=>'required'
        ]);
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->password = Hash::make(request('password'));
        $file_name = $request->file('Image')->store('public');
        $user->image = $file_name;
        $user->save();

        auth()->login($user);

        return redirect()->home();
    }

}
