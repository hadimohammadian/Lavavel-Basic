@extends('layouts.master')
@section('content')

    <h1>this is a index slider</h1>
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

@endsection
