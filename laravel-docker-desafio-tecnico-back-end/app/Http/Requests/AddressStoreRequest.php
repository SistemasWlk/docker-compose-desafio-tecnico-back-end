<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'cep' => ['required', 'string', 'min:8', 'max:12'],
            'address' => ['required'],
            'number' => [],
            'complement' => [],
            'neighborhood' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
        ];
    }

    /**
     * Get the messages rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'cep.required' => 'O CEP é obrigatório',
            'cep.string' => 'O CEP precisa ser uma string',
            'cep.min' => 'O CEP precisa ter no mínimo 3 caracteres',
            'cep.max' => 'O CEP precisa ter no máximo 100 caracteres',
            'address.required' => 'O Endereço é obrigatório',
            'neighborhood.required' => 'O Bairro é obrigatório',
            'city.required' => 'O Cidade é obrigatório',
            'state.required' => 'O Estado é obrigatório',
        ];
    }
}
