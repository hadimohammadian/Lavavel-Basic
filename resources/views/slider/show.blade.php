@extends('layouts.master')
@php
    $g= 100;
$b = "this is a simple text";
$aa = ['name'=>'hadi' , 'family'=>'mohammadian']

@endphp
@section('content')
    <h1>
        this is a show - {{$it}}
    </h1>

    <h2>{{$P_one}}</h2>
    <h2>{{$P_two}}</h2>
    <h1> this is a php section parameters</h1>
    <h3>
        <h4>{{var_dump($g)}}  </h4>
        <h4>  {{var_dump($b)}} </h4>
        <h4>  {{var_dump($aa)}}</h4>
    </h3>

    @include('partials.slider')
    @include('partials.products')
@endsection
@section('css')
    <style>
        h1 {
            text-align: center;
        }

        h2 {
            background-color: cadetblue;
        }

        h3 {
            background-color: darkgoldenrod;
        }

        h4 {
            background-color: greenyellow;
        }
    </style>
@endsection
@section('js')
    <script>
        console.log('show page');
    </script>
@endsection

