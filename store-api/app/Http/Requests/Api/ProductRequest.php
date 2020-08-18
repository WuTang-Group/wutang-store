<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->route()->getActionMethod()) {
            case 'productQuery':
            {
                return [
                    'id_list'=> 'required'
                ];
            }
        }
    }
}
