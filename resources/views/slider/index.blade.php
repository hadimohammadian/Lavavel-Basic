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
    <hr>
    @switch($x)
        @case(10)
        <h1>the number is : {{$x}}</h1>
        @break
        @case(15)
        <h1>the number is : {{$x}}</h1>
        @break
        @default
        <h1>The number is Other band</h1>
        @break
    @endswitch
    <hr>
    {{--    UNLESS is reverse IF Statement--}}
    @unless($x==5)
        <h1>Unless return value {{$x}} </h1>
    @endunless
    <hr>
    {{-- When user is not login to site--}}
    @guest
        <h1>You are not login and you must be registered in this site</h1>
        <a href="#">Register</a>
    @endguest

    <hr>

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
