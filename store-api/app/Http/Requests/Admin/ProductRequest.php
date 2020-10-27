<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\FormRequest;

class ProductRequest extends FormRequest
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
//                    'product_category_id' => 'exists:product_categories,id',
                    'product_name' => 'required|string',
                    'product_name_en' => 'required|string',
                    'price' => ['required', 'regex:~\d{1,}\.\d{2}$~'],
                    'sale_price' => ['required', 'regex:~\d{1,}\.\d{2}$~'],
                    'stock' => 'required|integer',
                    'status' => 'required',
                ];
            }
            case 'edit':
            {
                return [
//                    'product_category_id' => 'exists:product_categories,id',
                    'price' => ['regex:~\d{1,}\.\d{2}$~'],
                    'sale_price' => ['regex:~\d{1,}\.\d{2}$~'],
                    'stock' => 'integer',
                ];
            }
        }
    }
}
