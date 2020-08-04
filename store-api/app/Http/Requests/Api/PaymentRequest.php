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
            {
                return [
                    'no' => 'required',
                    'product_name' => 'required|string',
                    'total_amount' => 'required'
                ];
            }
        }
    }
}
