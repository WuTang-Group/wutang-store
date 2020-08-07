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
            'title'=>'required|string',
            'title_en'=>'string',
            'description'=>'string',
            'description_en'=>'string',
            'banner'=>'image',
            'product_category_id'=>'exists:product_categories,id',
        ];
    }

    public function messages()
    {
        return [
            'product_category_id.exists'=>'该商品分类不存在！'
        ];
    }
}
