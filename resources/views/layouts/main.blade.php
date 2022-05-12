<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>movies - @yield('title')</title>
</head>
<body>
    @include('partials.header')
    @yield('main-content')
    @include('partials.footer')
</body>
</html>