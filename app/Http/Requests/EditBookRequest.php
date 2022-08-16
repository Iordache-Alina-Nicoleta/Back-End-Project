<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class EditBookRequest extends FormRequest
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
            "Book_Name"=> "required",
            "ISBN_no" =>"required",
            "category_id" => "required",
            "author_id" => "required",
            "location_id" =>"required",
            "Status" => "required",
            "no_of_copy" =>"required",
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
