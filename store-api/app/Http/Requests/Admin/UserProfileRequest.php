<?php

namespace App\Http\Requests\Admin;


use App\Http\Requests\FormRequest;

class UserProfileRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->route()->getActionMethod()) {
            case 'update':
            {
                return [
                    'real_name' => 'required',
                    'sex' => 'required|integer',
                    'birthday' => 'date',
                    'age' => 'integer'
                ];
            }
            case 'bindMemberCode':
            {
                return [
                    'code' => ['required', 'exists:member_codes', function ($attribute, $value, $fail) {
                        if(!$this->user()->profile->real_name){
                            return $fail('个人资料不能为空');
                        }
                    }]
                ];
            }
        }
    }
}
