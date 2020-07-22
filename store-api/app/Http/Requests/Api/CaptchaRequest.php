<?php

namespace App\Http\Requests\Api;


use App\Http\Requests\FormRequest;

class CaptchaRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|string'
        ];
    }
}
