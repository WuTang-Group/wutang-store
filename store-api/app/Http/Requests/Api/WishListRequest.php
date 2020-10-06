<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\FormRequest;
use App\Models\UserWishList;

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
                    'product_id' => ['required','integer',function($attribute, $value, $fail){
                        $userWishList = UserWishList::whereUserId(auth('api')->user()->id)->find($value);
                        if($userWishList){
                            return $fail('该商品已在心愿单');
                        }
                    }]
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
