@extends('layouts.master')

@section('content')
	

<div class="w3-content" style="max-width:100%;">
  <img class="mySlides" src="/img/slider1.jpg" style="width:100%; height: 500px;">
  <img class="mySlides" src="/img/Slider2.jpg" style="width:100%; height: 500px;">
  <img class="mySlides" src="/img/slider3.jpg" style="width:100%; height: 500px;">
</div>

<div class="container">
	<div class="row">
		<h2 style="padding-left: 10px;">{{$title}}</h2>
		@foreach($books as $book)
		@if($book->qty > 0)
			<div class="col-md-3">
				<div class="col-md-12 single-item noPadding">
					<div class="top">
						<img src="{{Storage::url($book->image)}}">
					</div>
					<div class="bottom">
						<h3 class="item-title" style="height: 25px;">
							<a href="{{route('singleproduct',['id'=>$book->id])}}" style="text-decoration: none; color: black;">{{ substr($book->title,0,15).'......' }}</a>
						</h3>
						<div class="pull-right cutted-price text-muted">
							<del>{{$book->price}}/=</del>
						</div>
						<div class="clearfix"></div>
						<div class="pull-right discounted-price">{{$book->price - $book->discount}}/=</div>
						<div class="clearfix"></div>
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
							<div class="form-group" style="margin-bottom: 0;">
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
							<a href="{{route('cart')}}" class="btn btn-primary btn-lg btn-block" style="margin-top: 34px">View In Cart</a>
						@endif
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>
	</div>
</div>
<div class="text-center">
	{{ $books->links() }}
</div>
<div class="grid-1">
    <div class="container">
       	<h1>About Book Store</h1>
       	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vehicula accumsan elit eget vehicula. Aliquam accumsan leo metus, id finibus erat molestie eget. Integer auctor finibus velit et convallis. Maecenas et mattis nisi. Nulla viverra felis eu mattis placerat. Aliquam erat volutpat. Suspendisse arcu lorem, venenatis sed tristique sit amet, cursus et eros. Praesent tristique urna eget quam dictum laoreet. Donec sit amet volutpat nulla. Aliquam congue in nulla a vestibulum. Nullam non nunc laoreet, molestie purus sed, faucibus lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed vel odio sem. Maecenas gravida quam sit amet erat fringilla, at condimentum nibh aliquet. Pellentesque maximus tortor eget posuere auctor. Sed tincidunt felis eget vehicula varius.</p>
    </div>
</div>
@endsection
@section('js')
<script src="/js/slider.js"></script>
<script>
	@if(Session::has('message'))
		alert('{{Session::get('message')}}');
	@endif
</script>

@endsection
