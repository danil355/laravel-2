@extends('main_page')
<html>
<head>
    <link rel=stylesheet href="{{ asset('storage/css/style.css') }}" type='text/css'>
    <title>Резюме и вакансии</title></head>
<body>
@section('header')
    Резюме вакансии
{{--        @yield('header')Резюме и вакансии--}}
    <div id="logo"></div>
@endsection
@section('left')
    @yield('main-content')
@endsection
@section('right')
    <ul class="menu">
        <li><a href="/first">Фамилии персон, имеющих стаж от 5 до 15 лет</a></li>
        <li><a href="/second">Фамилии и стаж людей с профессией Программист</a></li>
        <li><a href="/third">Профессии, представители которых имеются в резюме</a></li>
        <li><a href="/fourth">Общее число резюме в базе</a></li>
    </ul>
{{--    <div class="footer">&copy; Copyright 2023</div>--}}
@endsection
</body>
</html>
