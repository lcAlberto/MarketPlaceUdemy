<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string|min:5|max:255',
            'description' => 'required|string|min:5|max:255',
            'phone' => 'required|string|min:5|max:255',
            'slug' => 'required|string|min:5|max:255',
            'logo' => 'required|string|min:5|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Preencha o nome da Loja',
            'name.string' => 'Nome precisa ser uma string',
            'name.min' => 'Nome precisa ter pelo mínimo :min caracteres',
            'name.max' => 'Nome precisa ter pelo máximo :max caracteres',

            'description.required' => 'Preencha a descrição',
            'description.string' => 'Descrioção precisa ser uma string',
            'description.min' => 'Descrição precisa ter pelo mínimo :min caracteres',
            'description.max' => 'Descrição precisa ter pelo máximo :max caracteres',

            'phone.required' => 'Preencha o telefone',
            'phone.string' => 'Telefone precisa ser uma string',
            'phone.min' => 'Telefone precisa ter pelo mínimo :min caracteres',
            'phone.max' => 'Telefone precisa ter pelo máximo :max caracteres',

            'slug.required' => 'Preencha o Slug',
            'slug.string' => 'Slug precisa ser uma string',
            'slug.min' => 'Slug precisa ter pelo mínimo :min caracteres',
            'slug.max' => 'Slug precisa ter pelo máximo :max caracteres',

            'logo.required' => 'Preencha o Logo',
        ];

    }
}
