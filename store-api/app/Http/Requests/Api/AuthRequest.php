<?php

namespace App\Http\Requests\Api;


use App\Http\Requests\FormRequest;
use Illuminate\Support\Facades\Log;

class AuthRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->route()->getActionMethod()) {
            case 'login':
            {
                return [
                    'username' => 'required|string',
                    'password' => 'required|alpha_dash|min:6',
                ];
            }
            case 'register':
            {
                return [
                    'name' => 'required',
                    'username' => ['required', 'min:6', 'regex:/^(([0-9])|([a-z])|([a-z]+[0-9]+)|([0-9]+[a-z]+))[a-z0-9]*$/i'],
                    'password' => 'required|alpha_dash|min:6|confirmed',
                    'password_confirmation' => 'required|same:password',
//                    'invitation_code' => 'required|string',
                    'captcha_key' => 'required|string',
                    'captcha_code' => 'required|string',
                    'password_question_id' => 'required|exists:password_questions,id',
                    'password_answer' => 'required|string'
                ];
            }
            case 'getUserQuestion':
            {
                return [
                    'username' => 'required|exists:users,username'
                ];
            }

            case 'resetPassword':
            {
                return [
                    'username' => 'required|exists:users,username',
                    'password_question_id' => 'required',
                    'password_answer' => 'required|string',
                    'password' => 'required|alpha_dash|min:6|confirmed',
                    'password_confirmation' => 'required|same:password',
                ];
            }

            case 'changePassword':
            {
                return [
                    'oldPassword' => 'required',
                    'newPassword' => 'required|alpha_dash|min:6|confirmed',
                    'newPassword_confirmation' => 'required|same:newPassword',
                ];
            }
        }
    }

    public function messages()
    {
        return [
            'name.required' => '名称必填',
            'username.required' => '用户名必填',
            'username.min' => '用户名长度不小于6位',
            'password.required' => '密码必填',
            'password_confirmation.required' => '确认密码必填',
            'password_question_id.exists' => '密保问题不存在',
            'username.exists' => '用户不存在'
        ];
    }
}
