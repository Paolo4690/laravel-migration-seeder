@extends('template.base')

@section('title', 'Lista treni')
    
@section('main')
    <h1>Lista treni</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                    {{ $train->agency }} - {{ $train->departure_station }} - {{ $train->arrival_station }} - {{ $train->departure_time }} - {{ $train->arrival_time }} - {{ $train->train_code }} - {{ $train->carriages }} - {{ $train->in_time }} - {{ $train->deleted }}
            </li>
        @endforeach
    </ul>
@endsection