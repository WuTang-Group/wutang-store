<?php

namespace App\Http\Requests\Api;


use App\Http\Requests\FormRequest;
use App\Models\MemberCode;

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
            case 'bindParentMemberCode':
            {
                return [
                    'code' => ['required', 'exists:member_codes', function ($attribute, $value, $fail) {
                        // 判断当前用户已输入会员码则不允许再绑定
                        if ($this->user()->member_code_id) {
                            return $fail('已绑定上级会员码,无法再次绑定');
                        }
                        $memberCode = MemberCode::whereCode($value)->first();
                        if ($this->user()->id == $memberCode->user_id) {
                            return $fail('不允许绑定自身会员码');
                        }
                    }]
                ];
            }
        }
    }

    public function messages()
    {
        return [
            'code.required' => ' 会员码必填',
            'code.exists' => '会员码输入有误'
        ];
    }
}
