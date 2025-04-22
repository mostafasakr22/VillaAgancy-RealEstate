<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'id'=>'required|unique:users|max:11',
            'name'=>'required|min:5|max:255',
            'email'=>'required|min:5|max:255',
            'age'=>'required',
            'gender'=>'required',
            'password'=>'required|min:5|max:50',
            
        ];
    }
}
