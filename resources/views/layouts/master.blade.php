<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel 9.X</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
  <script src="{{ asset('bootstrap.bundle.min.js') }}"></script>
  
</head>
<body>
   
    <div class="container">
       @yield('content')
    </div>

</body>
</html>
