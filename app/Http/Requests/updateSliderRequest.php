<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateSliderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|between:10,100',
            'caption'=>'required|between:10,100',
            'file'=>"required|mimes:jpg,png|size:1024",
        ];
    }
    public function  messages()
    {
        return[
            "title.required" => "تیتر لازم است",
            "title.between" => "مابین 10 و 100 باشد",
            "caption.required" => "الزامی است",
            "caption.between" => "بیم 10 و 100 ",
            "file.required" => "الزامی است",
            "file.mimes" => "عکس باشد",
            "file.size" => "1024 کیلو باشد",


        ];
    }
}
