@extends('layouts.master')
@section('title')
    @parent
    {{'ایجاد اسلایدر'}}

@endsection
@section('content')
    <h1>this page is slider create
    </h1>
    <hr>
    <p> this parameter send by compact() method</p>
    <h2>{{$r1}}</h2>
    <h2>{{$r2}}</h2>
    @include('partials.slider' , ['email'=>'w@oe.ir'] )
@endsection

@section('css')

    <style>
        h1 {
            background-color: chartreuse;
        }

        h2 {
            background-color: fuchsia;
        }
    </style>
@endsection
@section('js')
    <script>
        alert('CREATE page')
    </script>
@endsection
