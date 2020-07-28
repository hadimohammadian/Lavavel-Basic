@extends('layouts.master')
@php($a= 10)
@php($t = "this is php parameter")
@php($flag=true)

@section('content')

    <h1>this is a index slider</h1>
    <h2> a is <u>{{$a}}</u></h2>
    <h2>T is <u>{{$t}}</u></h2>
    <h2>flag is <u>{{$flag}}</u></h2>
    <hr>
    <p>Pass argument by php</p>
    <h2><?php echo $num;?></h2>
    <h2><?php echo $name;?></h2>
    <hr>
    <p>
        pass argument by blade
    </p>
    <h2>{{$num}}</h2>
    <h2>{{$name}}</h2>
    @include('partials.slider',['par01'=>$t,'email'=>'A@N.com','state'=>$flag])
    @include('partials.news',['nt001'=>"this is a new 01"])
    @includeWhen($flag,'partials.products' ,["pname"=>'SAMSUNG'])



@endsection


