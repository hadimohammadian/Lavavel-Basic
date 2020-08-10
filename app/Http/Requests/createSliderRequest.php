<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createSliderRequest extends FormRequest
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
            'firstName' => 'required|min:5|string',
            'password' => 'required|min:8',
            'email' => 'required|max:200',
            'image' => 'required',
            'age' => 'required|integer|between:1,120'
        ];
    }

    public function messages()
    {
        return[
            "firstName.required" => "نام الزامی است",
            "password.required" => "پسورد الزامی است",
            "email.required" => "ایمیل الزامی است",
            "image.required" => "تصویر الزامی است",
            "image.mimes" => "تصویر حتما باید یکی از فرمت های 'jpg,jpeg,png,gif' باشد",
            "firstName.min" => "حداقل طول نام 5 کاراکتر می باشد",
            "password.min" => "حداقل طول پسورد 8 کاراکتر می باشد",
            "age.required" => "سن الزامی است",
            "age.integer" => "سن باید عددی باشد",
            "age.between" => "سن باید بین 1 تا 120 باشد"
        ];
    }
}
