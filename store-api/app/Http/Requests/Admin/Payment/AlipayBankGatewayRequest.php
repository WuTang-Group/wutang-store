<?php

namespace App\Http\Requests\Admin\Payment;

use Illuminate\Foundation\Http\FormRequest;

class AlipayBankGatewayRequest extends FormRequest
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
                    'items.*.merch_id' => 'required|string',
                    'items.*.key' => 'required|string',
                    'items.*.product' => 'required|string',
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
            'items.*.merch_id.required' => 'items内merch_id必填',
            'items.*.merch_id.string' => 'items内merch_id必须为字符串',
            'items.*.key.required' => 'items内key必填',
            'items.*.key.string' => 'items内key必须为字符串',
            'items.*.product.required' => 'items内产品编号必填',
            'items.*.product.string' => 'items内产品编号必须为字符串'
        ];
    }
}
