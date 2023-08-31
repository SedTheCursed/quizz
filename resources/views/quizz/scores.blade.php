@extends('layouts.master')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Nom</th>
        <th scope="col">Sujet</th>
        <th scope="col">difficulté</th>
        <th scope="col">score</th>
        <th scope="col">date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>abdel</td>
        <td>Math</td>
        <td>facile</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>

    </tbody>
  </table>
@endsection
