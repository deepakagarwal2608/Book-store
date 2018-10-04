@extends('layouts.master')

@section('content')
<div id="all">
    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a>
                    </li>
                    <li><a href="{{route('orders')}}">My orders</a>
                    </li>
                    <li>Order #{{$orders->id}}</li>
                </ul>
            </div>
            <div class="col-md-12" id="customer-order">
                <div class="box">
                    <h1>Order #{{$orders->id}}</h1>
                    <p class="lead">Order #{{$orders->id}} was placed on <strong>{{$orders->created_at->toFormattedDateString()}}</strong> and 
                        @if($orders->status==0)
                            is currently in <strong>Shipping</strong>
                        @else
                            delivered on <strong> {{$orders->updated_at->toFormattedDateString()}}</strong>
                        @endif
                    </strong>.</p>
                    <p class="text-muted">If you have any questions, please feel free to <strong>contact us</strong>, our customer service center is working for you 24/7.</p>
                    <hr>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="2">Product</th>
                                    <th>Quantity</th>
                                    <th>Unit price</th>
                                    <th>Discount</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders->orderItem as $order)
                                <tr>
                                    <td>
                                        <a href="{{route('singleproduct',['id'=>$order->id])}}">
                                            <img src="{{Storage::url($order->image)}}"
                                            style="width: 50px;height: 50px;">
                                        </a>
                                    </td>
                                    <td><a href="{{route('singleproduct',['id'=>$order->id])}}">{{$order->title}}</a>
                                    </td>
                                    <td>{{$order->pivot->amount}}</td>
                                    <td>{{$order->price}}</td>
                                    <td>{{$order->discount}}</td>
                                    <td>{{$order->pivot->total}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="5" class="text-right">Order subtotal</th>
                                    <th>{{$orders->total}}</th>
                                </tr>
                                <tr>
                                    <th colspan="5" class="text-right">Shipping and handling</th>
                                    <th>Free</th>
                                </tr>
                                <tr>
                                    <th colspan="5" class="text-right">Total</th>
                                    <th>{{$orders->total}}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row addresses">
                        <div class="col-md-3 col-md-offset-9">
                            <h2>Shipping address</h2>
                            <p>{{$orders->name}}
                                <br>{{$orders->contact_number}}
                                <br>{{$orders->email}}
                                <br>{{$orders->address}},{{$orders->city}}
                                <br>{{$orders->state}}({{$orders->zip}})
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection