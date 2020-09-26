<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AprendizStoreRequest extends FormRequest
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
            'documento'=>'numeric|unique:aprendiz,documento',
            'nombre1'=>'required',
            'apellido1'=>'required',
            'correo'=>'required|unique:aprendiz,correo',
            'fecha_nac'=>'required',
            'direccion'=>'required',
            'telefono'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'documento.numeric'=>'Documento debe ser númerico',
            'documento.unique'=>'El Número documento <b>'.$this->documento.'</b> ya ha se encuentra registrado',
            'nombre1.required'=>'primer nombre es requerido',
            'apellido1.required'=>'primer apellido es requerido',
            'correo.required'=>'correo es requerido',
            'correo.unique'=>'El correo ya se encuentra <b>'.$this->correo.'</b> registado',
            'fecha_nac.required'=>'fecha requerida',
            'direccion.required'=>'dirección requerido',
            'telefono.required'=>'telefono requerido',
        ];
    }
}
