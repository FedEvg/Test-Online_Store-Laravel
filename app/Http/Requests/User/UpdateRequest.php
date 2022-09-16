<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the client is authorized to make this request.
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
            'name' => '',
            'surname' => '',
            'patronymic' => '',
            'phone' => 'required|string|unique:users,phone,'.$this->user->id,
            'email' => 'required|email|unique:users,email,'.$this->user->id,
            'role_id' => 'required|integer',
        ];
    }
}
