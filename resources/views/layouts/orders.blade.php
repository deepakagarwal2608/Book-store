@extends('layouts.master')

@section('content')
<div id="all">
	<div id="content">
        <div class="container">
        	<div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a>
                    </li>
                    <li>My orders</li>
                </ul>
            </div>
            <div class="col-md-12" id="customer-orders">
                <div class="box">
                    <h1>My orders</h1>
                    <p class="lead">Your orders on one place.</p>
                    <p class="text-muted">If you have any questions, please feel free to <strong>contact us</strong>, our customer service center is working for you 24/7.</p>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order</th>
                                    <th>Date/Time</th>
                                    <th>Total</th>
                                    <th>Payment_Status</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@php
									$x = 1
								@endphp
                            	@foreach($orders as $order)
                                <tr>
                                    <th>{{$x}}</th>
                                    <td>{{$order->created_at}}</td>
                                    <td>{{$order->total}}</td>

                                    @if($order->transactions_status=="succeeded")
                                    <td>{{$order->transactions_status}}</td>
                                    @if($order->status==0)
                                    <td><span class="label label-info">Pending</span>
                                    </td>
                                    @else
                                    <td><span class="label label-info">Delivered</span>
                                    </td>
                                    @endif
                                    <td><a href="{{route('orderdetails',['id'=>$order->id])}}" class="btn btn-primary btn-sm">View</a>
                                    </td>
                                    @else
                                    <td style="color: red;">{{$order->transactions_status}}</td>
                                    <td style="color: red;">Not is process</td>
                                    <td style="color: red;">Make Order Again</td>
                                    @endif
                                </tr>
                                @php
									$x = $x+1
								@endphp
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection