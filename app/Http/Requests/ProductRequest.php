<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ProductRequest extends FormRequest
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
            'name'             => 'required',
            'descripcion'      => 'required',
            'precio'           => 'required|numeric',
            'estado'           => 'required',
            'subcategorias'    => 'required',
        ];

    }

    public function messages()
    {
        return [
            'name.required'             => 'El campo Nombre es obligatorio.',
            'descripcion.required'      => 'El campo descripcion es obligatorio.',
            'estado.required'           => 'El campo estado es obligatorio.',
            'subcategorias.required'    => 'El campo subcategorias es obligatrio.',
            'precio.numeric'            => 'El campo Precio solo ingresa datos numericos'
        ];
    }
}
