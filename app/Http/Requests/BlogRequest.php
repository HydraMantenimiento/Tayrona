<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title'             => 'required|max:191',
            'body'              => 'required',
            'category_blog_id'  => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'title.required'            => 'El campo titulo es obligatorio.',
            'title.max'                 => 'El campo solo soporta 191 caracteres.',
            'body.required'             => 'El campo cuerpo del blog es obligatorio.',
            'category_blog_id.required' => 'El campo categoria es obligatrio.',
            'category_blog_id.numeric'  => 'El campo categoria solo ingresa datos numericos'
        ];
    }
}
