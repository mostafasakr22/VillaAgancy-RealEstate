<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VillaUpdateRequest extends FormRequest
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
            'id'=> 'required',
            Rule::unique('villas')->ignore($this->old_id),
            'price'=>'required',
            'space'=>'required',
            'bedrooms'=>'required',
            'bathrooms'=>'required',
            'floor'=>'required',
            'villa_img'=>'image|max:2048|mimes:jpeg,png,gif',
        ];
    }
}
