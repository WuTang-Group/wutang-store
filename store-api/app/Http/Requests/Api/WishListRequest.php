<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\FormRequest;

class WishListRequest extends FormRequest
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
                    'product_id' => 'required|integer'
                ];
            }
        }
    }

    public function messages()
    {
        return [
            'product_id.required' => '产品id必填',
            'product_id.integer' => '产品id数据类型有误'
        ];
    }
}
