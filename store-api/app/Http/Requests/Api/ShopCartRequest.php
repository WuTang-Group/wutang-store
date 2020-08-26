<?php

namespace App\Http\Requests\Api;


use App\Http\Requests\FormRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\ShopCartItem;

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
                    'product_list' => 'required|array',
                    'product_list.*.product_id' => ['required', function ($attribute, $value, $fail) {
                        if (!$product = Product::find($value)) {
                            return $fail('该商品不存在'.$value);
                        }
                        if ($product->stock === 0) {
                            return $fail('该商品已售完'.$value);
                        }
                        if (ShopCartItem::whereUserId($this->user('api')->id)->whereProductId($value)->first()) {
                            return $fail('您购物车已有该商品'.$value);
                        }
                        // 判断用户是否买过该商品
                        $orderItem = Order::whereHas('items', function ($query) use ($value) {
                            $query->whereProductId($value);
                        })->with('items')->whereUserId($this->user()->id)->paid()->get();
                        if (!$orderItem->isEmpty()) {
                            return $fail('您已购买过该商品'.$value);
                        }
                        // 判断用户订单中是否存在未付款商品
                        $orderItem = Order::whereHas('items', function ($query) use ($value) {
                            $query->whereProductId($value);
                        })->with('items')->whereUserId($this->user()->id)->unPaid()->get();
                        if (!$orderItem->isEmpty()) {
                            return $fail('您的订单中已有该商品'.$value);
                        }
                    }]
                ];
            }
//            case 'store':
//            {
//                return [
//                    'product_id' => ['required', function ($attribute, $value, $fail) {
//                        if (!$product = Product::find($value)) {
//                            return $fail('该商品不存在');
//                        }
//                        if ($product->stock === 0) {
//                            return $fail('该商品已售完');
//                        }
//                        if (ShopCartItem::whereUserId($this->user('api')->id)->whereProductId($value)->first()) {
//                            return $fail('您购物车已有该商品');
//                        }
//                        // 判断用户是否买过该商品
//                        $orderItem = Order::whereHas('items', function ($query) use ($value) {
//                            $query->whereProductId($value);
//                        })->with('items')->whereUserId($this->user()->id)->get();
//                        if (!$orderItem->isEmpty()) {
//                            return $fail('您已购买过该商品');
//                        }
//                    }]
//                ];
//            }
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
