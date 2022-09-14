<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => '',
            'surname' => '',
            'patronymic' => '',
            'phone' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'role_id' => '',

        ];
    }
}
