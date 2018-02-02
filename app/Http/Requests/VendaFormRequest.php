<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendaFormRequest extends FormRequest
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
            'cliente'           => 'required|min:3',
            'status'            => 'required',
            'data_entrega'      => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cliente.required'          => 'O campo nome é obrigatório',
            'status.required'           => 'O campo status é obrigatório',
            'cliente.min'               => 'O campo nome deve conter, pelo menos, 3 caracteres',
            'data_entrega.required'     => 'O campo Data de Entrega é obrigatório',
        ];
    }
}
