<?php
namespace App\Http\Requests\Admin;

use App\Http\Requests\FormRequest;
use App\Models\User;


class UserRequest extends FormRequest
{
    public function rules()
    {
        switch ($this->route()->getActionMethod())
        {
            case 'resetPassword':
            {
                return [
                    'oldPassword'=>'required',
                    'newPassword'=>'required|alpha_dash|min:6|confirmed',
                    'newPassword_confirmation' => 'required|same:newPassword',
                ];
            }
            case 'info':
            {
                return [
                    'hash_id'=>'required'
                ];
            }
            case 'store':
            {
                return [
                    'username' => ['required',function($attribute, $value, $fail){
                        $username = User::whereUsername($value)->first();
                        if($username){
                            return $fail('用户名已存在');
                        }
                    }],
                    'password' => 'required|min:6',
                    'name' => 'required',
                    'role' => 'required',
                    'company' => 'required',
                    'department' => 'required'
                ];
            }
        }
    }

    public function messages()
    {
        return [
            'username.required' => '用户名必填',
            'password.required' => '密码必填',
            'password.min' => '密码长度不符合规范',
            'name.required' => '姓名必填',
            'role.required' => '角色必选',
            'company.required' => '公司必选',
            'department.required' => '部门必选'
        ];
    }

}
