<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChamadoRequest extends FormRequest
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
            'txtNome' => 'required|max:100',
            'txtEmail' => 'required|max:200|email',
            'txtPedido' => 'required|numeric|max:999999',
            'txtTitulo' => 'required|max:100',
            'txtObservacao' => 'required|max:250'

        ];
    }

    public function messages()
    {
        return [
            'txtNome.required' => 'O campo nome é obrigatório.',
            'txtNome.max' => 'O campo nome deve ter no máximo 100 carateres.',
            'txtEmail.required' => 'O campo email é obrigatório.',
            'txtEmail.max' => 'O campo email deve ter no máximo 200 carateres.',
            'txtEmail.email' => 'Este email é inválido.',
            'txtPedido.required' => 'O campo pedido é obrigatório.',
            'txtPedido.max' => 'Código máximo de pedido é 999999.',
            'txtTitulo.required' => 'O campo título é obrigatório.',
            'txtTitulo.max' => 'O campo título deve ter no máximo 100 carateres.',
            'txtObservacao.required' => 'O campo observação é obrigatório.',
            'txtObservacao.max' => 'O campo observação deve ter no máximo 100 carateres.'
        ];
    }
}
