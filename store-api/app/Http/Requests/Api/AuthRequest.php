<?php

namespace App\Http\Requests\Api;


use App\Http\Requests\FormRequest;
use App\Models\MemberCode;
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
                    'code' => [function ($attribute, $value, $fail) {
                        if ($value) {
                            $memberCode = MemberCode::whereCode($value)->first();
                            if (!$memberCode) {
                                return $fail('会员码有误');
                            }
                            if ($this->user()->id == $memberCode->user_id) {
                                return $fail('不允许绑定自身会员码');
                            }
                        }
                    }],
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
            'username.regex' => '用户名仅允许:字母+数字/字母/数字',
            'password.required' => '密码必填',
            'password.confirmed' => '两次密码不一致',
            'password_question_id.exists' => '密保问题不存在',
            'password.alpha_dash' => '密码仅允许:字母、数字、破折号(-)或下划线(_)',
            'password.min' => '密码长度不小于6位',
            'username.exists' => '用户不存在',
            'captcha_key.required' => '请输入验证码的key',
            'captcha_code.required' => '请输入验证码的code',

        ];
    }
}
