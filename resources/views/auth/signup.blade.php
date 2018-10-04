@extends('layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="css/main.css">
@endsection
@section('content')
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<form class="login100-form" method="POST" action="{{route('postregister')}}" enctype="multipart/form-data">
				{{csrf_field()}}
				<span class="login100-form-title" style="padding-bottom: 26px;">
					Register
				</span>
				<div class="form-group">
					@include('layouts.errors')
				</div>
				<div class="wrap-input100 ">
					<input type="text" name="name" id="name" class="input100"  placeholder="Name" required>
				</div>
				<div class="wrap-input100 ">
					<input type="email" name="email" id="email" class="input100"  placeholder="Email" required>
				</div>
				<div class="wrap-input100 ">
					<input type="number" name="contact" id="contact" class="input100"  placeholder="Contact Number" required>
				</div>
				<div class="wrap-input100">
					<input type="password" name="password" id="password" class="input100" placeholder="Password" required>
				</div>
				<div class="wrap-input100">
					<input type="password" name="password_confirmation" id="password_confirmation" class="input100" placeholder="Confirm Password" required>
				</div>
				<div class="wrap-input100">
					<input type="file" name="Image" id="Image" class="input100" required>
				</div>
				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button type="submit"  class="login100-form-btn b1">SignUp</button>
					</div>
				</div>
				<div class="text-center" style="padding-top: 115px;">
					<span class="txt1">
						Already have an account!
					</span>
					<a class="txt2" href="/login">
						Login
					</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection