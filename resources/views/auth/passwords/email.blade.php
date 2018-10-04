@extends('layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="/css/main.css">
@endsection
@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form" method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                {{ csrf_field() }}
                <span class="login100-form-title" style="padding-bottom: 26px;">
                    Reset Password
                </span>
                <div class="form-group">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="wrap-input100 ">
                    <input type="email" name="email" id="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}"  placeholder="Email" required>
                </div>
                <div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit"  class="login100-form-btn b1">{{ __('Send Password Reset Link') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
