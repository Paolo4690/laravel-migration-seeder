@extends('template.base')

@section('title', 'Lista treni')

@section('main')
    <h1>Lista treni</h1>
    <ol>
        @foreach ($trains as $train)
            <li>
                    {{ $train->agency }} - {{ $train->departore_station }} - {{ $train->arrival_station }} - {{ $train->departure_time }} - {{ $train->arrival_time }} - {{ $train->train_code }} - {{ $train->carriages }} - {{ $train->in_time }} - {{ $train->deleted }}
            </li>
        @endforeach
    </ol>
@endsection

{{ $trains->links() }}
