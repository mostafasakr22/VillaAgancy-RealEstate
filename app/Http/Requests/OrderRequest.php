<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'id'=>'required|unique:orders|max:11',
            'name'=>'required|max:255',
            'email'=>'required|min:5|max:255',
            'order_img'=>'image|max:2048|mimes:jpg,png',
        ];
    }
}
