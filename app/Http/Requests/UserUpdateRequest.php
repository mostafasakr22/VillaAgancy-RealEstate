<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;
use Illuminate\Validation\ValidationRuleParser;

class UserUpdateRequest extends FormRequest
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
            'id' => 'required',
            ValidationRule::unique('users')->ignore($this->old_id),
            'name' => 'required|min:5|max:255',
            'email' => 'required|min:5|max:255',
            'age' => 'required',
            'gender' => 'required',
            'password' => 'required|min:5|max:50',
        ];
    }
}
