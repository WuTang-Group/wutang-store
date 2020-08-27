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
                    'banner'=>'image',
                    'img'=>'image',
                ];
            }

            case 'edit':
            {
                return [
                ];
            }
        }
    }


    public function messages()
    {
        return [
           'parent_id.exists'=>'类目不存在'
        ];
    }
}
