<?php

namespace App\Http\Requests\Api;


use App\Http\Requests\FormRequest;

class PaymentRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->route()->getActionMethod()) {
            case 'payByAlipay':
            case 'payByUnionpay' :
            case 'payByAlipayGateway':
            {
                return [
                    'no' => 'required',
                    'total_amount' => 'required'
                ];
            }
        }
    }

    public function messages()
    {
        return [
            'no.required' => '订单号必填',
            'total_amount.required' => '总金额必填'
        ];
    }
}
