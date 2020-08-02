@extends('layouts.master')
@php($a= 10)
@php($t   = "this is php parameter")

@php($flag  =true)
<?php
$a= 10;
//$t  = "this is php parameter";
$flag  =true;
?>

@section('content')

    <h1>For </h1>
    @for ($i = 0; $i < count($data); $i++)
        @if ($data )
            <h3>{{$data[$i]}}</h3>
        @endif
    @endfor
    <hr>



@include('partials.slider',['par01'=>'TEXT' ,'email'=>'A@N.com','state'=>true ])
@include('partials.news',['nt001'=>"this is a new 01"])
@includeWhen(true ,'partials.products' ,["pname"=>'SAMSUNG'])

@endsection

@section('title','صفحه اصلی')

@section('css')
    <style>
        .btn {
            display: block;
            background-color: #fff936;
            heigh: 40px;
            line-height: 50px;
            font-family: "Times New Roman";
        }

        .cp {
            display: block;
            height: 250px;
            width: 500px;
            text-align: center;
            background-color: #ff581f;
            margin: 20px auto;
        }

        .title {
            background-color: #38ff15;
            height: 50px;
            width: 500px;
            text-align: center;

        }
    </style>
@endsection
