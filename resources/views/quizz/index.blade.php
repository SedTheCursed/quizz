@extends('layouts.master')
@section('content')
<form action="">
    <label for="pseudo">Pseudonyme:</label><br>
    <input type="text" id="pseudo" name="pseudo"><br>
    <select name="sujet" id="sujet">
        <option value="" disabled>Sélectionner le sujet:</option>
        @foreach ($subjects as $subject)
        <option value="{{$subject['id']}}">{{$subject['name']}}</option>
        @endforeach
    </select>
    <fieldset>
        <legend>Sélectionner la difficulté:</legend>
        <div>
            <input type="radio" id="facile" name="drone" value="easy" checked />
            <label for="facile">Facile</label>
        </div>
        <div>
            <input type="radio" id="moyen" name="drone" value="medium" />
            <label for="dewey">Moyen</label>
        </div>
        <div>
            <input type="radio" id="difficile" name="drone" value="hard" />
            <label for="louie">Difficile</label>
        </div>
    </fieldset>
    <button type="button">Démarrer le Quizz</button>                    
</form>
@endsection
