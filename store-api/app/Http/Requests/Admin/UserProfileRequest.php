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
        switch ($this->route()->getActionMethod())
        {
            case 'update':
            {
                return [
                    'profile_id' => 'required',
                    'real_name' => 'required',
                    'sex' => 'required'
                ];
            }
            case 'bindMemberCode':
            {
                return [
                    'code' => 'required|exists:member_codes'
                ];
            }
        }
    }
}
