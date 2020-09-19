<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'password'=>'required',
            'password_confirm'=>'required_with:password|same:password',
            'username'=>'unique:users,username',
            'email'=>'unique:users,email',
        ];
    }

    public function messages()
    {
        return [
            'password.required'=>'Contraseña requerida',
            'password_confirm.same'=>'Las contraseñas no coinciden',
            'username.unique' => 'El usuario ya se encuentra registrado',
            'email.unique' => 'El correo ya se encuentra registrado',
        ];
    }
}
