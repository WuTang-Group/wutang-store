<?php
namespace App\Http\Requests\Admin;

use App\Http\Requests\FormRequest;


class UserRequest extends FormRequest
{
    public function rules()
    {
        switch ($this->route()->getActionMethod())
        {
            case 'password':
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
        }
    }

}
