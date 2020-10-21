<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\FormRequest;

class ContactUsRequest extends FormRequest
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
            case 'store':
            {
                return [
//                    'name' => 'required',
                    'type' => 'required',
                    'content' => 'required'
                ];
            }
        }
    }

    public function messages()
    {
        return [
//            'name.required' => '姓名必填',
            'type.required' => '类型必选',
            'content.required' => '内容必填'
        ];
    }
}
