<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest
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
            'email' => 'required|string|email|max:60',
            'rg' => 'required|string|max:13',
            'cpf' => 'required|string|max:11',
            'datacriacao' => 'date',
            'dataalteracao' => 'date',
            'fone' => 'nullable|string|max:11',
            'datanascimento' => 'nullable|date',
            'nome' => 'required|string|max:90',
            'password' => 'required|string|max:60',
            'codpais' => 'nullable|integer',
            'responsavel' => 'nullable|integer',
            'foto' => 'nullable|string',
            'cep' => 'nullable|string|max:8',
            'endereco' => 'nullable|string|max:120',
            'complemento' => 'nullable|string|max:120',
            'bairro' => 'nullable|string|max:60',
            'cidade' => 'nullable|string|max:60',
            'uf' => 'nullable|string|max:2',
            'tipopessoa' => 'required|string|max:2'
        ];
    }
}
