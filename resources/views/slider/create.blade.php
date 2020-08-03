@extends('layouts.master')
@section('title')
    @parent
    {{'ایجاد اسلایدر'}}

@endsection
@section('content')
    <section class="row mt-5">
        <section class="col-8 offset-2  ">
            <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <section class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" id="firstName" class="form-control">
                </section>
                <section class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" id="lastName" class="form-control">
                </section>
                <section class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </section>
                <section class="form-group">
                    <label for="comment">Comment</label>
                    <textarea type="text" name="comment" id="comment" class="form-control"></textarea>
                </section>
                <section class="form-group">

                    <input type="submit"   value="Register" class="btn btn-success btn-block">
                </section>

            </form>
        </section>
    </section>
@endsection

@section('css')
    <style>
        input[type=text]{
            border: 2px inset lightgray !important;
        }
        textarea{
            border: 2px inset lightgray  !important;
            height: 150px !important;
            resize: none;

        }
    </style>
    @endsection
