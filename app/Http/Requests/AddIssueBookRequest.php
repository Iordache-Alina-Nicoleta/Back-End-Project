<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddIssueBookRequest extends FormRequest
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
            "Author_Name" => "required",
            "Borrowed_Date" => "required",
            "Status" => "required",
            "client_id" => "required",
         ];
    }

    public function messages (){
        return [
            "required" => "The value of the :Attribute is necessary!"
        ];
    }
}
