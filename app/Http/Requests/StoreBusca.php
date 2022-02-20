<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBusca extends FormRequest
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
            'cep' => 'required|max:9|min:9|unique:ceps',
        ];
    }
    public function messages()
    {

        return [
            'cep.required' => 'Você deve inserir um cep.',
            'cep.max' => 'CEP deve ter até 9 caracteres',
            'cep.min' => 'CEP inválido',
            'cep.unique' => 'CEP já cadastrado em nosso banco de dados',
        ];
    }
}
