<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cart;
use App\User;
use App\Category;
use Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
        $item=Cart::where('user_id','=',$user_id)->count();
        $categories=Category::all();
        return view('layouts.profile',compact('item','user','categories'));
    }

    public function update()
    {
        $this->validate(request(),[
            'new_password'=>'required',
            'confirm_password'=>'required',
            'password'=>'required'
        ]);

        $pass = auth()->user()->password;
        $id = auth()->user()->id;
        if(request('new_password') == request('confirm_password'))
        {
            
            if(Hash::check(request('password'), $pass))
            {
                if(Hash::check(request('new_password'), $pass))
                {
                    return back()->withErrors([
                    'message'=>'Password Can not be same as previous password...!']);
                }
                $user = User::find($id);
                $user->password = Hash::make(request('new_password'));
                $user->save();
                return back()->with('success','Password has been changed successfully...!!!');
            }
            else
            {
                return back()->withErrors([
                'message'=>'Please type a valid old password...!']);
            }
        }
        else
        {
            
            return back()->withErrors([
                'message'=>'Password does not match with confirm password...!']);
        }
    }

    public function destroy()
    {
        $this->validate(request(),[
            'password'=>'required'
        ]);

        $user_id=auth()->user()->id;
        $pass=auth()->user()->password;

        if(Hash::check(request('password'), $pass))
        {
            $user = User::where('id','=', $user_id)->first(); 
            $user->delete();
            return redirect()->home();
        }
        else
        {
            return back()->withErrors([
                'message'=>'Please Check Your Password and try again']);
        }
        dd('checked');
    }
}
