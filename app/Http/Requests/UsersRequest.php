<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            'address' => 'string|required',
            'type_document' => 'string|required',
            'number_document' => 'required|numeric',
            'role_id' => 'required|numeric',
            'telephone' => 'required|numeric',
            'email' => 'email|unique|required',
            'password' => 'string|required',
            'password_confirmed ' => 'string|required',
            'gender' => 'string|required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre es obligatorio',
            'lastname.required' => 'El campo Apellido es obligatorio',
            'address.required' => 'El campo Direccion es obligatorio',
            'type_document.required' => 'El campo Tipo Documento es obligatorio',
            'number_document.numeric' => 'El campo Documento  es obligatorio',
            'role_id.numeric' => 'El campo Rol  es obligatorio',
            'telephone.numeric' => 'El campo Telefono es obligatorio',
            'email.required' => 'El campo Correo es obligatorio',
            'password.required' => 'El campo Contraseña es obligatorio',
            'password_confirmed.required' => 'El campo Contraseña es obligatorio',
            'gender.required' => 'El campo Contraseña es obligatorio',
        ];
    }
}
