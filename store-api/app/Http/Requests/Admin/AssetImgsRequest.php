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
                    'img'=>'required|image',
                    'img_location'=>'required|unique:asset_imgs,img_location'
                ];
            }

        }
    }

    public function messages()
    {
        return [
            'img:unique'=>'改位置已有图片，请编辑'
        ];
    }
}
