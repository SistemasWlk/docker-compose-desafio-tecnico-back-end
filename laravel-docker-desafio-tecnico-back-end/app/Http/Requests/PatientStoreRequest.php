<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:10000'],
            'image' => [],
            'cpf' => [],
            'cns' => [],
            'birth_date' => [],
            'mother' => [],
            'father' => [],
            'address_id' => [],
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
            'name.required' => 'O Nome é obrigatório',
            'name.string' => 'O Nome precisa ser uma string',
            'name.min' => 'O Nome precisa ter no mínimo 3 caracteres',
            'name.max' => 'O Nome precisa ter no máximo 100 caracteres',
        ];
    }

}
