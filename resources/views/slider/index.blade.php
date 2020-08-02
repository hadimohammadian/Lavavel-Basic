@extends('layouts.master')


@section('content')

     @include('partials.slider',['data'=>$data])

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
