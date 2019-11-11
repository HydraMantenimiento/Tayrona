<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCategoryRequest extends FormRequest
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
            'name' => 'required|max:191'
        ];
    }

    public function messages()
    {
        return [
            'name.required'            => 'El campo categoria es obligatorio.',
            'name.max'                 => 'El campo solo soporta 191 caracteres.',

        ];
    }
}
