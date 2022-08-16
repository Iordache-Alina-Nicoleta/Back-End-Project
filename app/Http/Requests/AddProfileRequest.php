<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddProfileRequest extends FormRequest
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
                'file_upload' => 'sometimes|file|mimes:jpg,png',
                "user_name" => "required",
                "user_id" =>"required",
                "email_address" => "required",
                "password" => "required",
                "user_address" => "required",
                "contact_no" => "required"
                
            ];
    }
    public function messages (){
        return [
            "required" => "The value of the :Attribute is necessary!"
        ];
    }
}
