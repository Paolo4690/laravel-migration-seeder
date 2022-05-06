@extends('template.base')

@section('title', 'Lista treni')

@section('main')
    <h1>Lista treni in Partenza</h1>
    <table>
        <thead>
            <tr>
                <th>Azienda</th>
                <th>N.</th>
                <th>Partenza</th>
                <th>Destinazione</th>
                <th>Orario</th>
                <th>Ritardo</th>
                <th>cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->agency }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->in_time }}'</td>
                    <td>
                        @if ($train->deleted)
                            &check;
                        @else
                            &cross;
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $trains->links() }}
@endsection
