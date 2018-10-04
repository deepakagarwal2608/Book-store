<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cart;
use App\Category;
use Socialite;
use App\User;
use Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except'=>'destroy']);
    }

    public function index()
    {
        $item=0;
        $categories=Category::all();
        return view('auth.login',compact('item','categories'));
    }

    public function store()
    {
        $this->validate(request(),[
            'email'=>'required|email|exists:users',
            'password'=>'required'
        ]);
        
        if(!auth()->attempt(request(['email','password'])))
        {
            return back()->withErrors([
            'message'=>'Please Check Your Credentials and try again']);
        }
        
        if(auth()->user()->admin==1)
        {
            return redirect()->route('admin');
        }
        return redirect()->route('home');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }


    public function callback()
    {
        try {
            
        
            $googleUser = Socialite::driver('google')->user();
            $existUser = User::where('email',$googleUser->email)->first();

            if($existUser) {
                Auth::loginUsingId($existUser->id);
                return redirect()->route('home');
            }
            else {
                $user = new User;
                $user->image=$googleUser->avatar_original;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->google_id = $googleUser->id;
                $user->password = md5(rand(1,10000));
                $user->save();
                Auth::loginUsingId($user->id);
                return redirect()->route('home');
            }
        } 
        catch (Exception $e) {
            return 'error';
        }
    }

    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function callbackFacebook()
    {
        try {
            
        
            $facebookUser = Socialite::driver('facebook')->user();
            $existUser = User::where('email',$facebookUser->email)->first();

            if($existUser) {
                Auth::loginUsingId($existUser->id);
                return redirect()->route('home');
            }
            else {
                $user = new User;
                $user->image=$facebookUser->avatar_original;
                $user->name = $facebookUser->name;
                $user->email = $facebookUser->email;
                $user->google_id = $facebookUser->id;
                $user->password = md5(rand(1,10000));
                $user->save();
                Auth::loginUsingId($user->id);
                return redirect()->route('home');
            }
        } 
        catch (Exception $e) {
            return 'error';
        }
    }
}
