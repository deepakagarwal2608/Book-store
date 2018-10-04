@extends('admin.layout.admin')
@section('content')
<h3>{{$title}}</h3>
<br>
<br>
    @if($count>0)
    <table class="table table-bordered table-striped" style="margin-top: 5px;">
        <thead>
            <tr>
                <th class="text-center">S.no</th>
                <th class="text-center">Order</th>
                <th class="text-center">User_id</th>
                <th class="text-center">User_name</th>
                <th class="text-center">Date/Time</th>
                <th class="text-center">Total</th>
                <th class="text-center">Payment_Status</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $x = 1
            @endphp
            @foreach($orders as $order)
            <tr>
                <td>{{$x}}</td>
                <td>{{$order->id}}</td>
                <td>{{$order->user_id}}</td>
                @foreach($users as $user)
                @if($user->id==$order->user_id)
                <td>{{$user->name}}</td>
                @endif
                @endforeach
                <td>{{$order->created_at}}</td>
                <td>{{$order->total}}</td>
                @if($order->transactions_status=="succeeded")
                <th class="text-center">{{$order->transactions_status}}</th>
                @if($order->status==0)
                <td><span class="label label-info">Pending</span>
                </td>
                @else
                <td><span class="label label-info">Delivered</span>
                </td>
                @endif
                @if($order->status==0)
                <td><a href="{{route('statuschange',['id'=>$order->id])}}" class="btn btn-primary btn-sm">Change</a>
                </td>
                @else
                <td>Action already taken</td>
                @endif
                @else
                <td style="color:red;">{{$order->transactions_status}}</td>
                <td style="color:red;">Not Applicable</td>
                <td style="color:red;">Not Applicable</td>
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
    @else
    <div class="center">
       <h4>There is no {{$title}}.</h4>
    </div>
    @endif
@endsection
