@extends('layouts.master')
@section('title')
    @parent
    {{'ایجاد اسلایدر'}}

@endsection
@section('content')
    <section class="row mt-5">
        <section class="col-8 offset-2  ">
            <div>
                {!! ' this is a text from laravel collective '  !!}

            </div>
            {!! Form::open(['route' => 'slider.store', 'method' => 'post']) !!}

            {!! Form::label('firstName', 'نام', ['class' => 'control-label','style'=>'color:green;font-size:20px;font-weight:bold']) !!}
            {!! Form::text('firstName', null, ['class' => 'form-control','palceholder'=>'Please enter your name','style'=>'border:2px inset blue;']) !!}
            {!! Form::label('password', 'کلمه عبور', ['class' => 'control-label']) !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
            {!! Form::label('email', 'ایمیل', ['class' => 'control-label']) !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}

            {!! Form::close() !!}

        </section>
    </section>
@endsection

