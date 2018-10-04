@extends('layouts.master')
@section('css')
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
    <link href="/css/cart/style.default.css" rel="stylesheet" id="theme-stylesheet">
    <link href="/css/checkout.css" rel="stylesheet">
    <script src="https://js.stripe.com/v3/"></script>
@endsection 
@section('content')
<div id="all">
    <div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li>Checkout</li>
                </ul>
            </div>
            <div class="col-md-12">
                @if (session()->has('success_message'))
                <div class="spacer"></div>
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
                @endif
                @if(count($errors) > 0)
                    <div class="spacer"></div>
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
            <div class="col-md-9" id="checkout">
                <div class="box">
                    <form method="POST" action="{{ route('checkout.store') }}" id="payment-form">
                        {{ csrf_field() }}
                        <h1>Checkout</h1>
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" id="email" name="email" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="address">Delivery Address</label>
                                        <textarea class="form-control" name="address" required style="height: 34px;"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <select class="form-control" id="state" name="state" required>
                                            <option></option>
                                            <option>Andaman and Nicobar Islands</option>
                                            <option>Andhra Pradesh</option>
                                            <option>Arunachal Pradesh</option>
                                            <option>Assam</option>
                                            <option>Bihar</option>
                                            <option>Chandigarh</option>
                                            <option>Chhattisgarh</option>
                                            <option>Dadra and Nagar Haveli</option>
                                            <option>Daman and Diu</option>
                                            <option>Delhi</option>
                                            <option>Goa</option>
                                            <option>Gujarat</option>
                                            <option>Haryana</option>
                                            <option>Himachal Pradesh</option>
                                            <option>Jammu and Kashmir</option>
                                            <option>Jharkhand</option>
                                            <option>Karnataka</option>
                                            <option>Kerala</option>
                                            <option>Lakshadweep</option>
                                            <option>Madhya Pradesh</option>
                                            <option>Maharashtra</option>
                                            <option>Manipur</option>
                                            <option>Meghalaya</option>
                                            <option>Mizoram</option>
                                            <option>Nagaland</option>
                                            <option>Orissa</option>
                                            <option>Pondicherry</option>
                                            <option>Punjab</option>
                                            <option>Rajasthan</option>
                                            <option>Sikkim</option>
                                            <option>Tamil Nadu</option>
                                            <option>Tripura</option>
                                            <option>Uttaranchal</option>
                                            <option>Uttar Pradesh</option>
                                            <option>West Bengal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" id="city" name="city" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="zip">Postal Code</label>
                                        <input type="text" id="zip" name="zip" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="contact">Contact Number</label>
                                        <input type="text" id="contact" name="contact" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2>Payment Details</h2>
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cname">Name on Card</label>
                                        <input type="text" id="cname" name="cname" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="caddress">Address</label>
                                        <textarea class="form-control" name="caddress" id="caddress" required style="height: 34px;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="card-element">
                                          Credit or debit card
                                        </label>
                                        <div id="card-element">
                                          <!-- A Stripe Element will be inserted here. -->
                                        </div>

                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" role="alert"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="{{ route('cart') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to basket</a>
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary" id="place_order">Place Order<i class="fa fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
                                    <th>{{$cart_total}}</th>
                                </tr>
                                <tr>
                                    <td>Shipping and handling</td>
                                    <th>Free</th>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <th>{{$cart_total}}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection
@section('js')
    <script>
        (function(){
            // Create a Stripe client.
            var stripe = Stripe("{{ env('STRIPE_KEY') }}");

            // Create an instance of Elements.
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
              base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Roboto","Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '14px',
                '::placeholder': {
                  color: '#999999'
                }
              },
              invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
              }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                displayError.textContent = event.error.message;
              } else {
                displayError.textContent = '';
              }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
              event.preventDefault();

              document.getElementById('place_order').disabled = true;

              var options = {
                name: document.getElementById('cname').value,
                address_line1: document.getElementById('caddress').value,
                address_city: document.getElementById('city').value,
                address_zip: document.getElementById('zip').value
              }

              stripe.createToken(card,options).then(function(result) {
                if (result.error) {
                  // Inform the user if there was an error.
                  var errorElement = document.getElementById('card-errors');
                  errorElement.textContent = result.error.message;
                  document.getElementById('place_order').disabled = false;
                } else {
                  // Send the token to your server.
                  stripeTokenHandler(result.token);
                }
              });
            });
            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);
                  // Submit the form
                form.submit();
            }
        })();
    </script>
@endsection

 