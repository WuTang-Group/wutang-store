<?php

namespace App\Http\Requests\Admin;


use App\Http\Requests\FormRequest;

class ShopCartRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->route()->getActionMethod()){
            case 'store':
            {
                return [
                    'product_id'=>'required|exists:products,id',
                    'amount'=>'required|integer'
                ];
            }
        }
    }
}
