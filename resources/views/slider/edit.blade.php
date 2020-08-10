@extends('layouts.master')

@section('content')
    {!! Form::open(['route' => ['slider.edit',$id], 'method' => 'put' , 'files' => true] ) !!}
    <h6 class="col-8 offset-2 mt-4">


        <section class="form-group">
            {!! Form::label('title',  'Title', ['class' => 'control-label']) !!}
            {!! Form::text('title', old('Title'), ['class' => 'form-control']) !!}
        </section>
        <section class="form-group">
            {!! Form::label('caption',  'caption', ['class' => 'control-label']) !!}
            {!! Form::text('caption', old('caption'), ['class' => 'form-control']) !!}
        </section>
        <section class="form-group">
            {!! Form::label('file',  'file', ['class' => 'control-label']) !!}
            {!! Form::file('file',   ['class' => 'form-control']) !!}
        </section>
        <section class="form-group">
            {!! Form::submit('Register', ['class' => 'btn btn-success btn-block']) !!}

        </section>

    </h6>
    {!! Form::close() !!}


@endsection
