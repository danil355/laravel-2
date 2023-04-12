@extends('main')
@section('main-content')
    <table>
        <tr>
            <th>Фамилии и стаж людей с профессией Программист</th>
        </tr>
        @foreach($programmerPerson as $i)
            <tr>
                <td>{{ $i->FIO }}</td>
                <td>{{ $i->Stage }}</td>
            </tr>
        @endforeach
    </table>
@endsection
