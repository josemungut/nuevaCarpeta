<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormFrutasRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required|max:15',
            'descripcion' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'NOMBRE VACIO',
            'nombre.max'=> 'TAMAÑO INCORRECTO',
            'descripcion.required' => 'DESCRIPCION VACIA'
        ];
    }
}
