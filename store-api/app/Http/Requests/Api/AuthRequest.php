<?php

namespace App\Http\Requests\Api;


use App\Http\Requests\FormRequest;

class AuthRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->route()->getActionMethod())
        {
            case 'login':
            {
                return [
                    'username'=>'required|string',
                    'password'=>'required|alpha_dash|min:6',
                ];
            }
            case 'register':
            {
                return [
                    'username'=>'required|string',
                    'password'=>'required|alpha_dash|min:6|confirmed',
                    'password_confirmation' => 'required|same:password',
                    'invitation_code' => 'required|string'
                ];
            }
        }
    }
}
