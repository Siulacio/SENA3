<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;

class UserUpdateRequest extends FormRequest
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
            'username'=>'unique:users,username,'.$this->id,
            'email'=>'unique:users,email,' .$this->id,
        ];
    }

    public function messages()
    {
        return [
            'username.unique' => 'El usuario ya se encuentra registrado',
            'email.unique' => 'El correo ya se encuentra registrado',
        ];
    }
}
