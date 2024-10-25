<?php

namespace App\Http\Requests\Login;

use Illuminate\Foundation\Http\FormRequest;

class SebraeUsersLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'O campo usuário é obrigatório.',
            'password.required' => 'O campo senha  é obrigatório.',
        ];
    }
}
