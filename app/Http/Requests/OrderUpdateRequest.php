<?php

namespace App\Http\Requests;

use Doctrine\Inflector\Rules\English\Rules;
use Illuminate\Validation\Rule as ValidationRule;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationRuleParser;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule as RuleRule;

class OrderUpdateRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'=> 'required',
            ValidationRule::unique('orders')->ignore($this->old_id),
            'name'=>'required|min:5|max:255',
            'email'=>'required|min:5|max:255',
            'order_img'=>'image|max:2048|mimes:jpeg,png',
        ];
        
    }
}
