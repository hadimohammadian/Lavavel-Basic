<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        return view('slider.index');
    }


    public function create()
    {
        return view('slider.create');

    }


    public function store(Request $request)
    {

    }


    public function show($id = null)
    {

        return view('slider.show');

    }

    public function edit($id)
    {
        return view('slider.edit');

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {
        //
    }
}
