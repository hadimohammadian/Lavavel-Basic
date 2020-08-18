<?php

namespace App\Http\Controllers;

use App\Http\Requests\createSliderRequest;
use App\Http\Requests\updateSliderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
{

    public function index()
    {
        session()->put(["firstname" => "hadi", "lastname" => "mohammadian", "age" => 37, "email" => "a@f.ir"]);

        $fn = session()->get("firstname");
        $ln = session()->get("lastname");
        $age = Session::get('age');
        $email = Session::get('email');
        $data = [$fn, $ln, $age, $email];

        return $data;

    }


    public function create()
    {
        $r1 = "R text";
        $r2 = "R2 Text";
        return view('slider.create', compact('r1', 'r2'));

    }


    public function store(createSliderRequest $request)
    {
        dd($request->all());
    }


    public function show($id = null)
    {
        $it = $id;
        $t = "parameter 01 ";
        $y = "Parameter 02";
        return view('slider.show', compact('it'))->with(['P_one' => $t, 'P_two' => $y]);

    }

    public function edit(updateSliderRequest $request, $id)
    {
        //dd($request->all());
        return view('slider.edit')->with(["id" => $id, $request->all()]);

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {
        //
    }
}
