<?php

namespace App\Http\Controllers;

use App\Http\Requests\createSliderRequest;
use App\Http\Requests\updateSliderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SliderController extends Controller
{

    public function index()
    {

        Log::stack(["daily","stack"])->info("من وارد اسلایدر شدم ");
        Log::stack(["daily"])->warning("نمایش هشدار روزانه");
        Log::stack(["stack"])->error("نمایش خطا در هر لحظه");
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

    public function edit(updateSliderRequest $request,$id)
    {
        //dd($request->all());
      return view('slider.edit')->with(["id"=>$id,$request->all()]);

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {
        //
    }
}
