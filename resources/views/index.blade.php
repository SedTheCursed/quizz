@extends('layouts.master')
@section('content')
<p>{{$number}}</p>
<p>{{$question}}</p>
{{var_dump($answers)}}
@endsection