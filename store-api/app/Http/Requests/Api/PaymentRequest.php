<?php

namespace App\Http\Requests\Api;


use App\Enums\OrderStatusCode;
use App\Http\Requests\FormRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Cache;

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
            case 'payByAlipayExpress':
            {
                return [
                    'no' => ['required','exists:order'],
                    'total_amount' => 'required',
                    'payment_key' => ['required',function($attribute, $value, $fail) {
                        if(!Cache::get($value)){
                            // 取消订单
                            Order::whereNo($value)->update(['status' => OrderStatusCode::StatusCanceled]);
                            return $fail('支付已超时');
                        }
                    }]
                ];
            }
        }
    }

    public function messages()
    {
        return [
            'no.required' => '订单号必填',
            'total_amount.required' => '总金额必填',
            'payment_key.required' => '支付key必填'
        ];
    }
}
