<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultaRequest extends FormRequest
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
            'datacriacao' => 'date',
            'dataconsulta' => 'date',
            'descricao' => 'required|string|max:120',
            'situacao' => 'nullable|string|max:1',
            'codpaciente' => 'required|integer',
            'codprofissionalsaude' => 'required|integer',
        ];
    }
}
