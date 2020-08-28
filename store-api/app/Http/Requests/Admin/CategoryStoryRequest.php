<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\FormRequest;

class CategoryStoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_category_id'=>'exists:product_categories,id',
        ];
    }

    public function messages()
    {
        return [
            'product_category_id.exists'=>'该商品类目不存在！'
        ];
    }
}
