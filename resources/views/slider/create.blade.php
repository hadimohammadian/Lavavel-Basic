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
            {!! Form::open(['route' => 'slider.store', 'method' => 'post','files'=>true]) !!}

            {!! Form::label('firstName', 'نام', ['class' => 'control-label','style'=>'color:green;font-size:20px;font-weight:bold']) !!}
            {!! Form::text('firstName', null, ['class' => 'form-control','palceholder'=>'Please enter your name','style'=>'border:2px inset blue;']) !!}
            {!! Form::label('password', 'کلمه عبور', ['class' => 'control-label']) !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
            {!! Form::label('email', 'ایمیل', ['class' => 'control-label']) !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
            {!! Form::label('image', 'عکس', ['class' => 'control-label']) !!}
            {!! Form::file('image',  ['class' => 'form-control']) !!}
            <label>
                {!! Form::checkbox('tv', '005', null,  ['id' => 'tv']) !!}
                Philips
            </label>
            <div>
                <label>
                    {!! Form::radio('cars', '1', true,  ['id' => 'cars']) !!}

                    peykan
                </label>
                <label>
                    {!! Form::radio('cars', '2', null,  ['id' => 'cars']) !!}
                    pride
                </label>

            </div>
            <section class="form-group">
                {!! Form::select('country', [1=>'IRAN',2=>'USA',3=>'Japan'] , null , ['class' => 'form-control','multiple'=>'multiple']) !!}
            </section>

            <section>
                {!! Form::selectRange('Days', 1, 31 , null , ['class' => 'form-control']) !!}
            </section>

            <section>
              {!! Form::selectMonth('Month' , null , ['class' => 'form-control']) !!}
            </section>
            <div>
                {!! Form::textarea('comment', 'This is a content Text inside textarea', ['class' => 'form-control']) !!}
            </div>

            <div>
                {!! Form::submit('Rgister', ['class' => 'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}

        </section>
    </section>
@endsection

