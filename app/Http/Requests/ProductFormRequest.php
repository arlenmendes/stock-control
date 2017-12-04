<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'nome'                  => 'required|min:3',
            'descricao'             => 'required|min:3',
            'quantidade'            => 'required',
            'quantidade_minima'     => 'required',
            'custo'                 => 'required',
            'preco_sugerido'        => 'required'
        ];
    }

    public function messages() {
        return [
            'nome.required'                 => 'O campo nome é obrigatório',
            'nome.min'                      => 'O campo nome deve conter, pelo menos, 3 caracteres',
            'descricao.min'                 => 'O campo Descrição deve conter, pelo menos, 3 caracteres',
            'descricao.required'            => 'O campo Descrição é obrigatório',
            'custo.required'                => 'O campo Custo é obrigatório',
            'quantidade.required'           => 'O campo quantidade é obrigatório',
            'preco_custo.required'          => 'O campo Preço de Custo é obrigatório',
            'quantidade_minima.required'    => 'O campo Quantidade Mínima é obrigatório'
        ];
    }
}
