<!DOCTYPE html>
<html lang="en">

<head>
  <title> quizz </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
  <script src="{{ asset('bootstrap.bundle.min.js') }}"></script>

</head>

<body>
  <div class="container">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading"> conception!</h4>
      <p class="lead"> Apllication de laravel </p>
      <hr>
      <p class="mb-0">developpement.</p>
      @yield('content')
    </div>

</body>
</html>