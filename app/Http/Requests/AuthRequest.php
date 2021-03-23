<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{

    public function rules()
    {
        return [
            'login' => 'required|min:2|max:20',
            'password' => 'required|min:2|max:20',
        ];
    }
    public function messages()
    {
        return [
            'login.required'=>'Вы не ввели логин',
            'login.min'=>'Логин не может быть меньше 2-х символов',
            'login.max'=>'Логин не может быть больше 20-ти символов',
            'password.required'=>'Вы не ввели пароль',
            'password.min'=>'Пароль не может быть меньше 2-х символов',
            'password.max'=>'Пароль не может быть больше 20 символов',
        ];
    }
}
