<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class clienteFormRequest extends FormRequest
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
  public function messages()
  {
    return [
      'required' => 'O campo :attribute é obrigatório',
      'min' => 'O campo :attribute precisa ter pelo menos :min caracteres',
      'max' => 'O campo :attribute precisa ter no máximo :max caracteres'
    ];
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {

    return [
      'nome' => [
        'required',
        'string',
        'max:60',
        'min:3'
      ],
      'data_nascimento' => [
        'required',
      ],
      'genero' => [
        'required',
        'string',
      ],
      'email' => [
        'nullable',
        'email',
        'min:5',
        'max:100'
      ],
      'endereco' => [
        'nullable',
        'string',
        'min:3',
        'max:100'
      ],
      'bairro' => [
        'nullable',
        'string',
        'min:3',
        'max:100'
      ],
      'cidade' => [
        'nullable',
        'string',
        'min:3',
        'max:100'
      ],
      'uf' => [
        'nullable',
        'string',
        'min:1',
        'max:2'
      ],
      'observacao' => [
        'nullable',
        'string',
        'max:400'
      ]
    ];
  }
}
