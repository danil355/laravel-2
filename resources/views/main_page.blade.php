<html>
<head>
    <link rel=stylesheet href="{{ asset('storage/css/style.css')}}" type='text/css'>
    <title>@yield('header')</title>
</head>
<body>
<div class="header">
    @yield('header')
</div>
<div class="leftcol">
    @yield('left')
</div>
<div class="rightcol">
    @yield('right')
</div>
<div class="footer">&copy; Copyright 2023</div>
</body></html>
