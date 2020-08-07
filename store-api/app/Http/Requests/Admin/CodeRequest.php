<?php

namespace App\Http\Requests\Admin;
use App\Http\Requests\FormRequest;


class CodeRequest extends FormRequest
{
    public function rules(){
        return [
            'code'=>'required|size:6',
            'phone'=>'required|exists:users,phone'
        ];
    }
}
