@extends('layouts.master')
@section('content')
<div class="center" style="padding-top: 15%;">
   <h1>Thank you for <br> Your Order!</h1>
   <p>A confirmation email was sent</p>
   <div></div>
   <div>
       <a href="{{ route('home') }}" class="button">Home Page</a>
   </div>
</div>
@endsection