<!DOCTYPE html>
<html lang="en">
<head>
  <title>Your Order</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width">
  <style>
    body 
    {
    margin: 0;
    }
    h1 a:hover 
    {
    font-size: 30px; color: #333;
    }
    h1 a:active 
    {
    font-size: 30px; color: #333;
    }
    h1 a:visited 
    {
    font-size: 30px; color: #333;
    }
    a:hover 
    {
    text-decoration: none;
    }
    a:active 
    {
    text-decoration: none;
    }
    a:visited 
    {
    text-decoration: none;
    }
    .button__text:hover 
    {
    color: #fff; text-decoration: none;
    }
    .button__text:active 
    {
    color: #fff; text-decoration: none;
    }
    .button__text:visited 
    {
    color: #fff; text-decoration: none;
    }
    @media (max-width: 600px) 
    {
      .container 
      {
        width: 94% !important;
      }
      .main-action-cell 
      {
        float: none !important; margin-right: 0 !important;
      }
      .secondary-action-cell 
      {
        text-align: center; width: 100%;
      }
      .header 
      {
        margin-top: 20px !important; margin-bottom: 2px !important;
      }
      .shop-name__cell 
      {
        display: block;
      }
      .order-number__cell 
      {
        display: block; text-align: left !important; margin-top: 20px;
      }
      .button 
      {
        width: 100%;
      }
      .or 
      {
        margin-right: 0 !important;
      }
      .apple-wallet-button 
      {
        text-align: center;
      }
      .customer-info__item 
      {
        display: block; width: 100% !important;
      }
      .spacer 
      {
        display: none;
      }
      .subtotal-spacer 
      {
        display: none;
      }
    }
    table
    {
      border-spacing: 0;
      border-collapse: collapse;
      width: 100%;
    }
    #ab-email
    {
      max-width: 600px;
    }
    td
    {
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "sans-serif";
    }
    .logo
    {
      width: 500px;
      height: 100px;
    }
    #content-header
    {
      color: #000000;
      padding: 37px 108px 42px;
    }
    #content-body
    {
      padding: 42px 42px 21px;
    }
    .s-copy
    {
      color: #000000; 
      font-size: 16px;
      font-weight: normal;
      line-height: 24px;
      margin: 0;
      padding: 0 0 21px;
    }
    .order-title
    {
      border-bottom-width: 1px; 
      border-bottom-color: #C3C3C3; 
      border-bottom-style: solid; 
      padding-bottom: 21px;
    }
    .item-image
    {
      border-bottom-width: 1px; 
      border-bottom-color: #C3C3C3; 
      border-bottom-style: solid; 
      max-width: 100px;
    }
    .item-title
    {
      color: #000000; 
      font-size: 16px; 
      line-height: 22px; 
      border-bottom-width: 1px; 
      border-bottom-color: #C3C3C3; 
      border-bottom-style: solid; 
      font-weight: normal; 
      padding: 18px;
    }
    .item-price
    {
      color: #000000; 
      font-size: 16px; 
      line-height: 22px; 
      border-bottom-width: 1px; 
      border-bottom-color: #C3C3C3; 
      border-bottom-style: solid; 
      box-sizing: border-box; 
      font-weight: normal; 
      max-width: 100px; 
      padding: 18px 18px 18px 0;
    }
    .os-name
    {
      color: #000000; font-size: 16px; 
      line-height: 22px; 
      border-bottom-width: 1px; 
      border-bottom-color: #C3C3C3; 
      border-bottom-style: solid; 
      padding: 18px;
    }
    .os-amount
    {
       color: #000000; 
       font-size: 16px; 
       line-height: 22px; 
       border-bottom-width: 1px; 
       border-bottom-color: #C3C3C3; 
       border-bottom-style: solid; 
       padding: 18px 18px 18px 0;
    }
    .os-total-name
    {
      color: #000000; 
      font-size: 16px; 
      line-height: 22px; 
      padding: 18px 18px 0;
    }
    .os-total-amount
    {
      color: #000000; 
      font-size: 16px; 
      line-height: 22px; 
      padding: 18px 18px 0 0;
    }
    .order-address
    {
       border-top-width: 1px; 
       border-top-color: #C3C3C3; 
       border-top-style: solid; 
       padding-top: 42px;
    }
    .s-title
    {
      color: #000000; 
      font-size: 13px; 
      font-weight: bold; 
      text-transform: uppercase; 
      padding: 0 0 21px;
    }
    .s-copy
    {
      color: #000000; 
      font-size: 16px; 
      font-weight: normal; 
      line-height: 24px; 
      margin: 0; 
      padding: 0 0 21px;
    }
    #footer-help
    {
      color: #000000; 
      padding: 42px 0 21px;
    }
    .s-title a
    {
      font-size: 13px; 
      text-decoration: none; 
      color: #000000; 
      font-weight: bold; 
      text-align: center; 
      text-transform: uppercase;
    }
  </style>
</head>
<body>
  <table id="ab-email" align="center" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td id="email-header" align="center" bgcolor="#E7ECEC">
        <table border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td id="eh-logo" class="s-center" align="center">
              <a title="Book-Store" href="http://localhost:8000"
              style="font-size: 16px; text-decoration: none;">
                <img alt="Book-Store" src="{{ URL::asset('/img/logo.png') }}" class="logo">
              </a>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td id="eh-hero" class="s-center" align="center">
        <img alt="Thank-you" src="{{ URL::asset('/img/thank-you.png') }}" class="logo">
      </td>
    </tr>
    <tr>
      <td id="email-content">
        <table border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td id="content-header" align="center">
              <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="s-copy" align="center">Hi {{$name}},</td>
                </tr>
                <tr>
                  <td class="s-copy" align="center">We got your order! We'll let you know when it ships and is headed your way.</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td id="content-body">
              <table class="order" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <th class="order-title">
                    <a href="#"
                    style="font-size: 20px; text-decoration: none; color: #000000; font-weight: bold; line-height: 26px;">Order #{{$order->id}}</a>
                  </th>
                </tr>
                <tr>
                  <td class="4-items">
                    <table border="0" cellpadding="0" cellspacing="0">
                      @foreach($carts as $cart)
                      <tr>
                        <td class="item-image">
                          <img src="{{$cart->book->image}}"
                          alt="{{$cart->book->title}}" style="display: block;">
                        </td>
                        <td class="item-title">{{$cart->book->title}}</td>
                        <td class="item-price" align="right">{{$cart->book->price-$cart->book->discount}}*{{$cart->amount}}</td>
                      </tr>
                      @endforeach
                    </table>
                  </td>
                </tr>
                <tr>
                  <td class="order-summary" style='padding-bottom: 18px;'>
                    <table border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td class="os-name" align="left">Subtotal</td>
                        <td class="os-amount" align="right">{{$order->total}}</td>
                      </tr>
                      <tr>
                        <td class="os-name" align="left">Fast(ish) Shipping (Delivered by USPS in 5 - 7 Business Days)</td>
                        <td class="os-amount" align="right">$0.00</td>
                      </tr>
                      <tr>
                        <td class="os-total-name" align="left"> <b>Total</b>(Paid with Mastercard...6500)</td>
                        <td class="os-total-amount" align="right"><b>{{$order->total}}</b>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td class="order-address" align="center">
                    <table border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td class="s-title" align="center">Your order is being shipped to:</td>
                      </tr>
                      <tr>
                        <td class="s-copy" align="center">{{$order->name}},
                          <br>{{$order->address}},
                          <br>{{$order->city}},
                          <br>{{$order->state}}({{$order->zip}}),
                          <br>{{$order->contact_number}}
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td id="email-footer">
        <table border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td id="footer-help" align="center" bgcolor="#F1EBE7">
              <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="s-icon" style='padding-bottom: 10px;' align="center">
                    <a title="Help" href="#">
                      <img alt="Help" src="https://cdn.shopify.com/s/files/1/1104/4168/files/fh-faqs-icon-170904.png?9053883598121413583"
                        height="40">
                    </a>
                  </td>
                  <td class="s-icon" style='padding-bottom: 10px;' align="center">
                    <a title="Contact Us" href="#" style="font-size: 16px; text-decoration: none;">
                      <img alt="Contact Us" src="https://cdn.shopify.com/s/files/1/1104/4168/files/fh-email-icon-1070904.png?9053883598121413583"
                        height="40">
                    </a>
                  </td>
                  <td class="s-icon" style='padding-bottom: 10px;' align="center">
                    <a title="Call 9914884017" href="#" style="font-size: 16px; text-decoration: none;">
                      <img alt="Call 1.888.963.8944" src="https://cdn.shopify.com/s/files/1/1104/4168/files/fh-phone-icon-170904.png?9053883598121413583"
                        height="40">
                    </a>
                  </td>
                </tr>
                <tr>
                  <td id="fh-help" class="s-title" align="center">
                    <a title="Help" href="#">Help</a>
                  </td>
                  <td id="fh-email" class="s-title" align="center">
                    <a title="Contact Us" href="#">Contact Us</a>
                  </td>
                  <td id="fh-phone" class="s-title" style='width:33%;' align="center">
                    <a title="Call 9914884017" href="#" >9914884017</a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td id="footer-content" align="center">
              <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td id="fc-social" style='padding: 42px 130px;'>
                    <table border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td class="social-icon" style='padding: 0 15px;' align="center">
                          <a title="Instagram" href="#" style="font-size: 16px; text-decoration: none;">
                            <img alt="Instagram" src="{{ URL::asset('/img/instagram-icon.png') }}" width="27">
                          </a>
                        </td>
                        <td class="social-icon" style='padding: 0 15px;' align="center">
                          <a title="Facebook" href="#" style="font-size: 16px; text-decoration: none;">
                            <img alt="Facebook" src="{{ URL::asset('/img/facebook-icon.png') }}" width="27">
                          </a>
                        </td>
                        <td class="social-icon" style='padding: 0 15px;' align="center">
                          <a title="Pinterest" href="#" style="font-size: 16px; text-decoration: none;">
                            <img alt="Pinterest" src="{{ URL::asset('/img/pinterest-icon.png') }}" width="27">
                          </a>
                        </td>
                        <td class="social-icon" style='padding: 0 15px;' align="center">
                          <a title="Twitter" href="#" style="font-size: 16px; text-decoration: none;">
                            <img alt="Twitter" src="{{ URL::asset('/img/twitter-icon.png') }}" width="27">
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td id="fc-copyright" style='color: #000000; font-size: 12px; line-height: 16px;' align="center">© 2018 D-Books, Inc.</td>
                </tr>
                <tr>
                  <td id="fc-address" style='color: #000000; font-size: 12px; line-height: 16px;'
                    align="center">#3226a Sunny enclave Mohali(140301),Punjab</td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>

