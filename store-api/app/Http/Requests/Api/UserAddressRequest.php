<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\FormRequest;

class UserAddressRequest extends FormRequest
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
            case 'update':
            case 'store':
            {
                return [
                    'province'      => 'required',
                    'city'          => 'required',
                    'district'      => 'required',
                    'address'       => 'required',
                    'zip'           => 'required',
                    'contact_name'  => 'required',
                    'contact_phone' => 'required',
                ];
            }
        }
    }

    public function messages()
    {
        return [
            'province.required' => '省必填',
            'city.required' => '市必填',
            'district.required' => '区必填',
            'address.required' => '地址必填',
            'zip.required' => '邮编必填',
            'contact_name.required' => '联系人必填',
            'contact_phone.required' => '联系方式必填'
        ];
    }
}
