<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $x=10;
        $t = "hadi";
        return view('slider.index',['num'=>$x,'name'=>$t]);
    }


    public function create()
    {
        $r1 = "R text";
        $r2 = "R2 Text";
        return view('slider.create',compact('r1','r2'));

    }


    public function store(Request $request)
    {

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
