
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <title>Book Store</title>   
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.css">
    @yield('css')
  </head>
  <body>
    @include('layouts.nav')
        @yield('content') 
    @include('layouts.footer')
    <br>
    <br>
    <br>
    <br>
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/backend.js"></script>
    @yield('js')
    
    
  </body>
</html>