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

            {!! Form::close() !!}

        </section>
    </section>
@endsection

