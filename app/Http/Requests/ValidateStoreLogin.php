<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateStoreLogin extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            
            'user' => 'required',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'user.required' => 'Informe seu nome de usuário!',
            'password.required'  => 'Informe sua senha!'
        ];
    }
}
