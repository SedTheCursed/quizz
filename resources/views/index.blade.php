@foreach ($subjects as $subject)
    <p>{{$subject["id"]}} : {{$subject["name"]}}</p>
@endforeach