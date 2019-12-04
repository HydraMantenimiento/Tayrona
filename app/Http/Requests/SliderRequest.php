<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'descripcion'       => 'required',
            'imagen'               => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required'            => 'El campo titulo es obligatorio.',
            'title.max'                 => 'El campo solo soporta 191 caracteres.',
            'descripcion.required'      => 'El campo descripcion del carrousel es obligatorio.',
            'imagen.required'           => 'El campo imagen del carrousel es obligatorio.',
        ];
    }
}
