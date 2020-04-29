<!DOCTYPE html>
<html lang="en">
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
  <style type="text/css" media="all">
  
            .container {
                margin-top: 10px;
            }
            .nav-link{
                color: white;
            }
            th{
              color:white;
              background:#696969;
            }
  </style>
  <title>Quick Delivery</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <nav class="navbar navbar-expand-lg  navbar-light bg-dark">
    <a class="nav-link" href="{{ url('orders') }}">Home</a>
  </nav>
</head>
<body>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <div class="container">
    @yield('main')
  </div>
</body>
</html>