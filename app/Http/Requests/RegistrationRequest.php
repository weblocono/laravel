<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'username' => 'required|min:4|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'min:6', 'same:re_password'],
            'policy' => 'accepted',
        ];
    }
}
