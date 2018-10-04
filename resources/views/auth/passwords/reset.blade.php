@extends('layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="/css/main.css">
@endsection
@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form" method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                {{csrf_field()}}
                <span class="login100-form-title" style="padding-bottom: 26px;">
                    {{ __('Reset Password') }}
                </span>
                <div class="form-group">
                    @include('layouts.errors')
                </div>
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="wrap-input100 ">
                    <input type="email" name="email" id="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}"  placeholder="Email" required>
                </div>
                <div class="wrap-input100">
                    <input type="password" name="password" id="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required>
                </div>
                <div class="wrap-input100">
                    <input type="password" name="password_confirmation" id="password_confirm" class="input100" placeholder="Confirm Password" required>
                </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit"  class="login100-form-btn b1">{{ __('Reset Password') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection