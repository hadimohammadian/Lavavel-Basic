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
        $r1 = "R text";
        $r2 = "R2 Text";
        return view('slider.create',compact('r1','r2'));

    }


    public function store(Request $request)
    {
        dd($request->route()->getController());
        dd($request->route()->getAction());
        dd($request->route()->getName());
        dd($request->except(['firstName']));
        dd($request->only(['firstName','lastName']));
        dd($request->has('firstName')?"Yes it has":"No it hasn't");
        dd($request->all());
//        or
        dd($request->get('firstName'));
//        or
        dd($request->firstName,$request->lastName);

    }


    public function show($id = null)
    {
        $it = $id;
        $t = "parameter 01 ";
        $y = "Parameter 02";
        return view('slider.show',compact('it'))->with(['P_one'=>$t,'P_two'=>$y]);

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
