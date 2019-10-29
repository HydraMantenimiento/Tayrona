<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'string|required',
            'lastname' => 'string|required',
            'type_document' => 'string|required',
            'number_document' => 'number|required',
            'email' => 'email|unique|required',
            'role_id' => 'number|required',
            'password' => 'string|required',
            'gender' => 'string|required'
        ];
    }
}
