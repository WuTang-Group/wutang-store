<?php

namespace App\Http\Requests\Admin;


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
            case 'destroy':
            {
                return [
                    'id' => 'required'
                ];
            }
        }
    }

    public function attributes()
    {
        return [
            'province'      => '省',
            'city'          => '城市',
            'district'      => '地区',
            'address'       => '详细地址',
            'zip'           => '邮编',
            'contact_name'  => '姓名',
            'contact_phone' => '电话',
        ];
    }
}
