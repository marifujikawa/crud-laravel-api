<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name'=>'required|unique:products'
        ];
    }

    public function messages(){
        return [
            "required" => "O campo :attribute é requerido",
            "unique"=> "O campo :attribute já existe no banco de dados"
        ];
    }
}
