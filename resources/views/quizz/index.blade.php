@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
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
<p>QUIZZ</p>
<form action="">
    <label for="pseudo">Pseudonyme:</label><br>
    <input type="text" id="pseudo" name="pseudo"><br><br>
        <select name="sujet" id="sujet">
            <option value="" disabled>Sélectionner le sujet:</option>
        {{--  @foreach ($subjects as $subject)
            <option value="{{$subject['id']}}">{{$subject['name']}}</option>
            @endforeach  --}}
        </select><br><br>
            <legend>Sélectionner la difficulté:</legend>
            <div>
                <input type="radio" id="facile" value="easy" checked />
                <label for="facile">Facile</label>  
                <input type="radio" id="moyen"  value="medium" />
                <label for="dewey">Moyen</label>
                <input type="radio" id="difficile"  value="hard" />
                <label for="louie">Difficile</label>
            </div>
        </fieldset><br>
    <button type="submit">Démarrer le Quizz</button>                    
</form>
@endsection
</body>
</html>

