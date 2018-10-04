@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row"> 
		<ol class="breadcrumb">
			<li>
				<a href="{{route('home')}}">Home</a>
			</li>
			<li>
				<a href="{{route('books',['id'=>$book->category->id])}}">{{$book->category->name}}</a>
			</li>
			<li class="active ">{{$book->title}}</li>  
		</ol>
	</div>
	<div class="row">
		<div class="col-md-8">
			<h3 class="pp-title">{{$book->title}}</h3>
			<img src="{{Storage::url($book->image)}}" class="img-responsive" style="width: 300px;height: 300px;">
			<h4 class="pp-desc-head">Description</h4>
			<div class="pp-desc-detail">
				<p>{{$book->description}}</p>
			</div>
		</div>
		<aside class="col-md-4">			
			<ul class="list-group">
				<li class="list-group-item">
					<div class="row">
						<div class="col-md-3"><i class="fa fa-truck fa-2x"></i></div>
						<div class="col-md-9">Delivered within 5 days</div>
					</div>
				</li>
				<li class="list-group-item">
					<div class="row">
						<div class="col-md-3"><i class="fa fa-refresh fa-2x"></i></div>
						<div class="col-md-9">Easy Return in 7 Days</div>
					</div>
				</li>
				<li class="list-group-item">
					<div class="row">
						<div class="col-md-3"><i class="fa fa-phone fa-2x"></i></div>
						<div class="col-md-9">Call at 9914884017</div>
					</div>
				</li>
			</ul>
			<form method="POST" action="{{route('postaddcart')}}" >
			{{ csrf_field() }}
				<input type="hidden" name="book" value="{{$book->id}}">
				@php
					$x = 0
				@endphp
				@foreach($carts as $cart)
					@if($cart->book_id==$book->id)
						@php
							$x = 1
						@endphp
					@endif
				@endforeach
				@if($x==0)
				<div class="form-group">
					<label for="amount">Amount</label>
					<select name="amount" class="form-control">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</div>
				<button class="btn btn-danger btn-lg btn-block">Add to Cart</button>
				@endif
			</form>
			@if($x==1)
			<a href="{{route('cart')}}" class="btn btn-primary btn-lg btn-block">View In Cart</a>
			@endif
			<br>
		</aside>
	</div>
</div>
<script>
	@if(Session::has('message'))
		alert('{{Session::get('message')}}');
	@endif
</script>
@endsection