<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFromRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        // logica de nivel de acesso fica aqui
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // dd($this->segment(2));
        // dd($this->id);
        $id = $this->id ?? '';

        $rules = [
            'name' => 'required|string|max:255|min:3',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'min:3',
                "unique:users,email,{$id},id" //com o id, ele não vai verificar o email do usuário que está sendo editado
            ],
            'password'=> [
                'required',
                'min:3',
                'max:15'
            ]
        ];

        if ($this->method('PUT')) {
            $rules['password'] = [
                'min:3',
                'max:15',
                'nullable'
            ];
        }

        return $rules;
    }
}
