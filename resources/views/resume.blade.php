@extends('main_page')
<html><head>
    <link rel=stylesheet href='{{ asset('storage/css/style.css') }}' type='text/css'>
    <title>Резюме и вакансии </title></head><body>

{{--<div class="header">--}}
    @section('header'){{$header}}@endsection
{{--    <div id="logo"></div>--}}
{{--</div>--}}

{{--<div class="leftcol"><!--**************Основное содержание страницы************-->--}}
@section('left')
    <h1>{{$profession}}</h1>

    <p class="pinline second">
        Фамилия и имя - {{$surname}}<br><br>
        Телефон: {{$mobile}}
    </p>

    <p  class="pinline third">
        Стаж: {{$experience}}
    </p>

    <p>
        <img src="{{ asset($avatar) }}">
    </p>
@endsection
{{--</div>--}}

@section('right')<!--*******************Навигационное меню*******************-->
    <ul class="menu">
        <li><a href="">Вакансии</a></li>
        <li><a href="">Резюме по профессиям</a></li>
        <li><a href="">Резюме по возрасту</a></li>
        <li><a href="">Избранное резюме</a></li>
    </ul>
@endsection

{{--<div class="footer">&copy; Copyright 2023</div>--}}
</body></html>
