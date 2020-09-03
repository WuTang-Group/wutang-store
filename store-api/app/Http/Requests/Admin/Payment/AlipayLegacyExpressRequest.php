<?php

namespace App\Http\Requests\Admin\Payment;


use App\Http\Requests\FormRequest;

class AlipayLegacyExpressRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->route()->getActionMethod()) {
            case 'store':
            {
                return [
                    'items' => 'required|array',
                    'items.*.pid' => 'required|string',
                    'items.*.key' => 'required|string',
                    'items.*.seller_email' => 'required|email'
                ];
            }
            case 'delete':
            {
                return [
                    'items' => 'required|array',
                    'items.*.id'=> 'required|integer',
                ];
            }
        }
    }

    public function messages()
    {
        return [
            'items.required' => 'items必填',
            'items.array' => 'items必须为数组',
            'items.*.pid.required' => 'items内pid必填',
            'items.*.pid.string' => 'items内pid必须为字符串',
            'items.*.key.required' => 'items内key必填',
            'items.*.key.string' => 'items内key必须为字符串',
            'items.*.seller_email.required' => 'items内seller_email必填',
            'items.*.seller_email.email' => 'items内seller_email必须为邮箱',

            'items.*.id.required' => 'id必填',
            'items.*.id.integer' => 'id需为整形'
        ];
    }
}
