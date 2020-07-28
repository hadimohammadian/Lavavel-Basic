<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <title>Document</title>--}}

    <title>my Site - @yield('title')</title>
{{--    <title>my Site - @section('title') @show</title>--}}
    @yield('css')
</head>
<body>
@yield('content')

<!-- javascripts Codes -->
@yield('js')
</body>
</html>
