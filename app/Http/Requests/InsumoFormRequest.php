<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsumoFormRequest extends FormRequest
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
            'nome'          => 'required|min:3',
            'descricao'     => 'required|min:3',
            'preco'         => 'required',
            'quantidade'    => 'required'
        ];
    }

    public function messages() {
        return [
            'nome.required'         => 'O campo nome é obrigatório',
            'nome.min'              => 'O campo nome deve conter, pelo menos, 3 caracteres',
            'descricao.min'         => 'O campo Descrição deve conter, pelo menos, 3 caracteres',
            'descricao.required'    => 'O campo Descrição é obrigatório',
            'preco.required'        => 'O campo Preço é obrigatório',
            'quantidade.required'   => 'O campo quantidade é obrigatório'
        ];
    }
}
