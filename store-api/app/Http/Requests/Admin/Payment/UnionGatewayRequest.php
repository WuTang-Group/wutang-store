<?php

namespace App\Http\Requests\Admin\Payment;

use Illuminate\Foundation\Http\FormRequest;

class UnionGatewayRequest extends FormRequest
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
                    'items.*.cpid' => 'required|string',
                    'items.*.pay_type' => 'required|integer',
                ];
            }
            default:
            {
                return [];
            }
        }
    }

    public function messages()
    {
        return [
            'items.required' => 'items必填',
            'items.array' => 'items必须为数组',
            'items.*.cpid.required' => 'items内cpid必填',
            'items.*.cpid.string' => 'items内cpid必须为字符串',
            'items.*.pay_type.required' => 'items内pay_type必填',
            'items.*.pay_type.string' => 'items内pay_type必须为数字',
        ];
    }
}
