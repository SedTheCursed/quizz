@extends('layouts.master')
@section('content')
<form action="{{route('quizz.init')}}" method="post">
    @csrf
    <label for="pseudo">Pseudonyme:</label><br>
    <input type="text" id="pseudo" name="pseudo"><br><br>
        <select name="sujet" id="sujet">
            <option value="" selected disabled>Sélectionner le sujet:</option>
            @foreach ($subjects as $subject)
            <option value="{{$subject['id']}}">{{$subject['name']}}</option>
            @endforeach
        </select><br><br>
            <legend>Sélectionner la difficulté:</legend>
            <div>
                <input type="radio" id="facile" value="easy" name="difficulty" checked />
                <label for="facile">Facile</label>  
                <input type="radio" id="moyen"  value="medium" name="difficulty"/>
                <label for="dewey">Moyen</label>
                <input type="radio" id="difficile"  value="hard" name="difficulty" />
                <label for="louie">Difficile</label>
            </div>
        </fieldset><br>
    <button type="submit">Démarrer le Quizz</button>                    
</form>
@endsection
