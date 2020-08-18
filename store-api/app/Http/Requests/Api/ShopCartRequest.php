<?php

namespace App\Http\Requests\Api;


use App\Http\Requests\FormRequest;
use App\Models\Product;

class ShopCartRequest extends FormRequest
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
                    'product_id' => ['required', function ($attribute, $value, $fail) {
                        if (!$product = Product::find($value)) {
                            return $fail('该商品不存在');
                        }
                        if ($product->stock === 0) {
                            return $fail('该商品已售完');
                        }
                    }],
                    'amount' => 'required|integer'
                ];
            }
            case 'updateItemNumber':
            {
                return [
                    'product_id' => ['required', function ($attribute, $value, $fail) {
                        if (!$product = Product::find($value)) {
                            return $fail('该商品不存在');
                        }
                        if ($product->stock === 0) {
                            return $fail('该商品已售完');
                        }
                    }],
                ];
            }
            case 'delete':
            {
                return [
                    'product_id' => 'required|products,id'
                ];
            }
        }
    }
}
