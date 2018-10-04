@extends('layouts.master')
@section('css')
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
    <link href="/css/cart/style.default.css" rel="stylesheet" id="theme-stylesheet">
@endsection 
@section('content')
<div id="all">
    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a>
                    </li>
                    <li>My Cart</li>
                </ul>
            </div>
        	@if($item==0)
        	<div class="col-md-12" id="basket">
        	@else
            <div class="col-md-9" id="basket">
            @endif
                <div class="box">
            	    <h1>Shopping cart</h1>
            	    @if($item==0)
        	        <div class="center">
        	           <img src="img/empty-cart.png" style="width: 200px;height: 200px;">
        	           <br>
        	           <p style="font-size: 20px;">Your Shopping Cart is empty</p>
        	        </div>
            	    @else
                    <form>
                        <p class="text-muted">You currently have {{$item}} item(s) in your cart.</p>
                        <div id="lodding"></div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    	<th>S.no</th>
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit price</th>
                                        <th>Discount</th>
                                        <th colspan="2">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@php
										$x = 1
									@endphp
									@foreach($cart_books as $cart_book)
                                    <tr>
                                    	<td>{{$x}}</td>
                                        <td>
                                            <a href="{{route('singleproduct',['id'=>$cart_book->book->id])}}">
                                            <img src="{{Storage::url($cart_book->book->image)}}" alt="{{$cart_book->book->title}}">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('singleproduct',['id'=>$cart_book->book->id])}}">{{$cart_book->book->title}}</a>
                                        </td>
                                        <td class="cart-id" data-id="{{$cart_book->id}}">
                                            <input type="number" class="qty" id="{{$cart_book->id}}" min="1" max="5" value="{{$cart_book->amount}}" class="form-control" style="padding: 6px 2px;">
                                        </td>
                                        <td>{{$cart_book->book->price}}</td>
                                        <td>{{$cart_book->book->discount}}</td>
                                        <td id="total-{{$cart_book->id}}">{{$cart_book->total}}
                                        </td>
                                        <td><a href="{{route('deletecart',['id'=>$cart_book->id])}}" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                    @php
										$x = $x+1
									@endphp
									@endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="6">Total</th>
                                        <th colspan="2" id="net">{{$cart_total}}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </form>
                    <div class="box-footer">
                        <div class="pull-left">
                            <a href="{{ route('home') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Continue Shopping</a>
                        </div>
                        <div class="pull-right">
                            <a href="{{ route('checkout.index') }}" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @endif
                </div>
            </div>
            @if($item>0)
            <div class="col-md-3">
                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3>Order summary</h3>
                    </div>
                    <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Order subtotal</td>
                                    <th id="a">{{$cart_total}}</th>
                                </tr>
                                <tr>
                                    <td>Shipping and handling</td>
                                    <th>Free</th>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <th id="b">{{$cart_total}}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>   
@endsection