<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <title>Quizz</title>
    <style>
      body, p {
        width: 600px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 200px;
        text-align: center;
        background-color: #0080ff;
        
        font-size: 30px; 
        font-family: "Montserrat";
      }
      legend{
        font-size: 30px; 
        font-family: "Montserrat"; 
      }
      p{
        font-size: 60px; 
        font-family: "Montserrat";
        color: "azure"; 
      }
      form{
        text-align: center;
      }
      </style>
</head>
<body>
  <main class="container">
    <p>QUIZZ</p>
    @yield('content')
  </main>
</body>
</html>