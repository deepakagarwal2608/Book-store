@extends('layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="css/main.css">
@endsection
@section('content')
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<form class="login100-form" method="POST" action="{{route('postlogin')}}">
				{{ csrf_field() }}
				<span class="login100-form-title" style="padding-bottom: 26px;">
					Welcome
				</span>
				<div class="form-group">
					@include('layouts.errors')
				</div>
				<div class="wrap-input100 ">
					<input type="email" name="email" id="email" class="input100"  placeholder="Email" required>
				</div>
				<div class="wrap-input100">
					<input type="password" name="password" id="password" class="input100" placeholder="Password" required>
				</div>
				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button type="submit"  class="login100-form-btn b1">Login</button>
					</div>
					<a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
				</div>
				<br>
				<div class="row">
					<div class="col-md-5">
						<hr style="height:1px;color:#333;background-color:#333;" />
					</div>
					<div class="col-md-2" style="text-align: center;">OR</div>
					<div class="col-md-5">
						<hr style="height:1px;color:#333;background-color:#333;" />
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-6" style="padding-right: 2.5px">
						<a href="{{ url('/redirect/facebook') }}" class="socmed-btn facebook-btn">
							<i class="fa fa-facebook-square"></i>
							<span>Facebook</span>
						</a>
					</div>
					<div class="col-md-6" style="padding-left: 2.5px">
						<a href="{{ url('/redirect') }}" class="socmed-btn google-btn">
							<i class="fa fa-google"></i>
							<span>Google</span> 
						</a>
					</div>
				</div>
				<div class="text-center" style="padding-top: 20px;padding-bottom: 20px;">
					<span class="txt1">
						New to Book-Store
					</span>

					<a class="txt2 btn-link" href="/register">
						Create an account
					</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
