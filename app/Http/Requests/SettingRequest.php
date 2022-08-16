<?php

namespace App\Http\Requests;

use App\Models\Setting;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::check()){
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "library_name"=> "required",
            "address" => "required",
            "contact_no" =>"required",
            "book_return_day_limit" => "required",
            "email_address" => "required"
        ];
}
    public function messages (){
    return [
        "required" => "The value of the :Attribute is necessary!"
    ];
}
}