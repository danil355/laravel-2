@extends('main')
@section('main-content')
    <table>
        <tr>
            <th>Профессии, представители которых имеются в резюме</th>
        </tr>
        @foreach($liststaffs as $staff)
            <tr>
                <td>{{$staff->staff}}</td>
            </tr>
        @endforeach
    </table>
@endsection
