@extends('layouts.master')

@section('content')
    <h2 class="col-8 offset-2 mt-4">
        {!! Form::open(['route' => ['slider.edit',$id], 'method' => 'post']) !!}
        	<p class="alert alert-danger">
                {{$id}}
            </p>

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
        {!! Form::close() !!}
    </h2>
@endsection
