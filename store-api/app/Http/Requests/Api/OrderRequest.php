<?php

namespace App\Http\Requests\Api;


use App\Http\Requests\FormRequest;
use App\Models\Product;
use Illuminate\Validation\Rule;

class OrderRequest extends FormRequest
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
            case 'requestCreate':
            {
                return [
                    // 判断用户提交的地址 ID 是否存在于数据库并且属于当前用户
                    'address_id' => ['required',Rule::exists('user_addresses', 'id')->where('user_id', $this->user()->id),],
//                    'items' => 'required|array',
//                    'items.*.product_id' => [ // 检查 items 数组下每一个子数组的 product_id 参数
//                        'required',
//                        function ($attribute, $value, $fail) {
//                            if (!$product = Product::find($value)) {
//                                return $fail('该商品不存在');
//                            }
//                            if ($product->stock === 0) {
//                                return $fail('该商品已售完');
//                            }
//                            // 获取当前索引
//                            preg_match('/items\.(\d+)\.product_id/', $attribute, $m);
//                            $index = $m[1];
//                            // 根据索引找到用户所提交的购买数量
//                            $amount = $this->input('items')[$index]['amount'];
//                            if ($amount > 0 && $amount > $product->stock) {
//                                return $fail('该商品库存不足');
//                            }
//                        },
//                    ],
//                    'items.*.amount' => ['required', 'integer', 'min:1'],
                ];
            }
            case 'retryCreate':
            {
                return [
                    'no' => 'required|exists:orders'
                ];
            }
        }
    }

    public function messages()
    {
        return [
            'address_id.required' => '用户地址必填',
            'address_id.exists' => '用户地址无效',
            'no.required' => '订单号必填',
            'no.exists' => '订单号不存在'
        ];
    }
}
