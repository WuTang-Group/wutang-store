<?php

namespace App\Http\Requests\Api;


use App\Http\Requests\FormRequest;

class ProductSkuRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        switch ($this->route()->getActionMethod()) {
            case 'store':
            {
                return [
                    'title'=>'required|string',
                    'description'=>'required|string',
                    'price'=>['required', 'regex:~\d{1,}\.\d{2}$~'],
                    'stock'=>'required|integer',
                    'product_id'=>'required|exists:products,id'
                ];
            }
            case 'edit':
            {
                return [
                    'title'=>'string',
                    'description'=>'string',
                    'price'=>['regex:~\d{1,}\.\d{2}$~'],
                    'stock'=>'integer',
                    'product_id'=>'exists:products,id',
                ];
            }
        }
    }
}
