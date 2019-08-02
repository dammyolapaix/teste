<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Admin\Post;

class ValidateStorePost extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O campo título é obrigatório!',
            'title.max' => 'O título deve conter no máximo 255 caracteres!',
            'title.unique' => 'Esse título já existe, por favor digite outro diferente!',
            'body.required' => 'O campo texto é obrigatório!',
            'category.required'  => 'O campo categoria é obrigatório!',
            'image.required'  => 'Selecione uma imagem!'
        ];
    }

}
