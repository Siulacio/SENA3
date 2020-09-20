<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramaStoreRequest extends FormRequest
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
            'codigo'=>'required|numeric',
            'nombre'=>'required',
            'duracion'=>'required|numeric',
            'fecha_cierre'=>'after:'.$this->fecha_inicio,
        ];
    }

    public function messages(){
        return [
            'codigo.required' => 'El campo código es obligatorio',
            'codigo.numeric' => 'El campo código debe ser númerico',
            'nombre.required' => 'El campo nombre es obligatorio',
            'duracion.required' => 'El campo duracion es obligatorio',
            'duracion.numeric' => 'El campo duracion debe ser númerico',
            'fecha_cierre.after' => 'La fecha de cierre debe ser porterior a la de inicio',
        ];
    }
}
