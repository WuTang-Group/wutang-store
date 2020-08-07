<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\FormRequest;

class ProductCategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->route()->getActionMethod()){
            case 'store':
            {
                return [
                    'title'=>'required|string',
                    'title_en'=>'string',
                    'describe'=>'string',
                    'describe_en'=>'string',
                    'banner'=>'image',
                    'description'=>'string',
                    'description_en'=>'string',
                    'img'=>'image',
                    'parent_id'=>'exists:product_categories,id'
                ];
            }

            case 'edit':
            {
                return [
                    'title'=>'string',
                    'title_en'=>'string',
                    'describe'=>'string',
                    'describe_en'=>'string',
                    'banner'=>'image',
                    'description'=>'string',
                    'description_en'=>'string',
                    'img'=>'image',
                    'parent_id'=>'exists:product_categories,id'
                ];
            }
        }
    }


    public function messages()
    {
        return [
           'parent_id.exists'=>'商品类不存在'
        ];
    }
}
