@extends('layouts.master')
@section('title')
    @parent
    {{'ایجاد اسلایدر'}}

@endsection
@section('content')
    <section class="row mt-5">
        <section class="col-8 offset-2  ">
            <form action="" method="" enctype="multipart/form-data">
                <section class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" id="firstName" class="form-control">
                </section>
                <section class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" id="lastName" class="form-control">
                </section>
                <section class="form-group">
                    <label for="fatherName">Father Name</label>
                    <input type="text" name="fatherName" id="fatherName" class="form-control">
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
