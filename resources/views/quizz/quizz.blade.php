@extends('layouts.master')
@section('content')
<h3>Question {{$number}}/10</h3><br><h1>{{$question}}</h1>
    <form action="" name="quizzform" method="post">
        <div style="position:relative;width:100%;">
            <div id="altcontainer" class="notranslate">
                @foreach ($answers as $answer)
                    <label class="radiocontainer" id="label1"><input type="radio" name="quizz" id="1" onclick="clickRadio(this)" value="{{$answer['']}}"> <span class="checkmark"></span></label>
                @endforeach
                </div>
        </div>
        <br>
        <div id="answerbuttoncontainer">
            <button class="answerbutton w3-btn ws-green" type="submit" onclick="clickNextButton(1)">Next ❯</button>
        </div>
    </form>
@endsection