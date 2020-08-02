@extends('layouts.master')
@php($a= 10)
@php($t = "this is php parameter")
@php($flag=true)


@section('content')
    @if ($x==13)
        <h1>Number is true</h1>
    @else
        <h1>Number is <u>NOT TRUE</u></h1>
    @endif

    @if ($t2=='hadi')
        <h2>Name is {{$t2}}</h2>
    @elseif($t2=='ahmad')
        <h2>Name is {{$t2}}</h2>
    @else
        <h2>name is not define</h2>
    @endif

    <h1>this is a index slider</h1>
    <h2> a is <u>{{$a}}</u></h2>
    <h2>T is <u>{{$t}}</u></h2>
    <h2>flag is <u>{{$flag}}</u></h2>
    <hr>
    {{--    <p>Pass argument by php</p>--}}
    {{--    <h2><?php echo $num;?></h2>--}}
    {{--    <h2><?php echo $name;?></h2>--}}
    <hr>
    <p>
        pass argument by blade
    </p>
    {{--    <h2>{{$num}}</h2>--}}
    {{--    <h2>{{$name}}</h2>--}}
    @include('partials.slider',['par01'=>$t,'email'=>'A@N.com','state'=>$flag])
    @include('partials.news',['nt001'=>"this is a new 01"])
    @includeWhen($flag,'partials.products' ,["pname"=>'SAMSUNG'])



@endsection

@section('title','صفحه اصلی')
