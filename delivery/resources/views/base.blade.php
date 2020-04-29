<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <div class="container">
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>