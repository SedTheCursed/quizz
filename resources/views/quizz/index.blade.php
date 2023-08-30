@extends('layouts.master')
@section('content')
<form action="">
    <label for="pseudo">Pseudonyme:</label><br>
    <input type="text" id="pseudo" name="pseudo"><br>
    <select name="sujet" id="sujet">
        <option value="">Sélectionner le sujet:</option>
    </select>
    <fieldset>
        <legend>Sélectionner la difficulté:</legend>
        <div>
            <input type="radio" id="facile" name="drone" value="facile" checked />
            <label for="facile">Facile</label>
        </div>
        <div>
            <input type="radio" id="moyen" name="drone" value="moyen" />
            <label for="dewey">Moyen</label>
        </div>
        <div>
            <input type="radio" id="difficile" name="drone" value="difficile" />
            <label for="louie">Difficile</label>
        </div>
    </fieldset>
    <button type="button">Démarrer le Quizz</button>                    
</form>
@endsection
