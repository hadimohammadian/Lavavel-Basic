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
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
    @yield('css')
</head>
<body>
@yield('content')

<!-- javascripts Codes -->
<script !src="{{asset('dist/js/jquery-3.5.1.min.js')}}"></script>
<script !src="{{asset('dist/js/popper.min.js')}}"></script>
<script !src="{{asset('dist/js/bootstrap.min.js')}}"></script>
@yield('js')
</body>
</html>
