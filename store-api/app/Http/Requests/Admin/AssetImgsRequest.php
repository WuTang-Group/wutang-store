<?php

namespace App\Http\Requests\Admin;


use App\Http\Requests\FormRequest;

class AssetImgsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ( $this->route()->getActionMethod()) {
            case 'store':
            {
                return [
                    'img'=>'required',
                    'img_location'=>'required',
                    'type'=>'required',
                    'product_id'=>'required|exists:products,id',
                ];
            }

        }
    }

    public function messages()
    {
        return [
            'product_id:exists'=>'产品不存在'
        ];
    }
}
