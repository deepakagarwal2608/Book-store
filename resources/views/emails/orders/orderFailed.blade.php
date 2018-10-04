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
    
    .s-copy
    {
      color: #000000; 
      font-size: 16px;
      font-weight: normal;
      line-height: 24px;
      margin: 0;
      padding: 0 0 21px;
    }
    .s-title
    {
      color: #000000; 
      font-size: 13px; 
      font-weight: bold; 
      text-transform: uppercase; 
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
      <td id="email-content">
        <table border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td id="content-header" align="center">
              <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="s-copy" align="center"><p>Hi {{$name}},</p></td>
                </tr>
                <tr>
                  <td class="s-copy">
                    <p>Sorry to say we have some bad news. We were unable to process your current order because the card used for payment by you was declined. you can try again after some time. If the payment goes through then, your order will be back on track.</p>
                  </td>
                </tr>
                <tr>
                  <td class="s-copy">Some common issues involve:</td>
                </tr>
                <tr>
                  <td class="s-copy">
                    <ul>
                      <li>Expiration date</li>
                      <li>Exact name on card</li>
                      <li>Billing zip code</li>
                      <li>Card security code</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="s-copy">
                    <p>The good news is it may not be too late! Check your card details and make a another hit and you may still be able to receive your order.</p>
                  </td>
                </tr>
              </table>
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

