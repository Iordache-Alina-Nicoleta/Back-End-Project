<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddAuthorRequest extends FormRequest
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
                "Author_Name"=> "required",
                "Status" => "required",
                "description" =>"required",
                "Created_On" => "required",
                "Updated_On" => "required"
            ];
    }
    public function messages (){
        return [
            "required" => "The value of the :Attribute is necessary!"
        ];
    }
}
