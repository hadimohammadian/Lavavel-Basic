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
        return view('slider.create', compact('r1', 'r2'));

    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required|min:5|string',
            'password' => 'required|min:8',
            'email' => 'required|max:200',
            'image' => 'required',
            'age' => 'required|integer|between:1,120'
        ],[
            "firstName.required" => "نام الزامی است",
            "password.required" => "پسورد الزامی است",
            "email.required" => "ایمیل الزامی است",
            "image.required" => "تصویر الزامی است",
            "firstName.min" => "حداقل طول نام 5 کاراکتر می باشد",
            "password.min" => "حداقل طول پسورد 8 کاراکتر می باشد",
            "age.required" => "سن الزامی است",
            "age.integer" => "سن باید عددی باشد",
            "age.between" => "سن باید بین 1 تا 120 باشد"
        ]);
        dd('passed');
    }


    public function show($id = null)
    {
        $it = $id;
        $t = "parameter 01 ";
        $y = "Parameter 02";
        return view('slider.show', compact('it'))->with(['P_one' => $t, 'P_two' => $y]);

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
