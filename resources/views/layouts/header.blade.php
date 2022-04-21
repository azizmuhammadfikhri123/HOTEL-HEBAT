<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.landing-page.css')
    @include('layouts.landing-page.navbar')
    @yield('content')
    @include('layouts.landing-page.js')
</body>
</html>
