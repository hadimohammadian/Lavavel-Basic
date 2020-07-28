@extends('layouts.master')

@section('content')
    <h1>
        this is a show - {{$it}}
    </h1>

    <h2>{{$P_one}}</h2>
    <h2>{{$P_two}}</h2>
@endsection
@section('css')
    <style>
        h1 {
            background-color: red;
        }

        h2 {
            background-color: cadetblue;
        }
    </style>
@endsection
@section('js')
    <script>
        console.log ('show page');
    </script>
@endsection
