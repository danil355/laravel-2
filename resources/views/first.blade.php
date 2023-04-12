@extends('main')
@section('main-content')
    <table>
        <tr>
            <th>Фамилии персон, имеющих стаж от 5 до 15 лет</th>
        </tr>
        @foreach($stages as $i)
            <tr>
                <td>{{$i->FIO}}</td>
            </tr>
        @endforeach
    </table>
@endsection
