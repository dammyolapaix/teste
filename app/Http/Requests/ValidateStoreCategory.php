<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Admin\Category;

class ValidateStoreCategory extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
         return [
            
            'name' => 'required',
         
        ];
    }

     public function messages()
    {
        return [
            'name.required' => 'Informe o nome da categoria!',
        ];
    }

} // end class
