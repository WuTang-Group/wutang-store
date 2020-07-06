<?php

namespace App\Http\Requests;

use App\Enums\ResponseStatusCode;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class FormRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * 改写Form request异常参数处理
     * @param Validator $validator
     * @throws ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        if ($this->container['request'] instanceof \Illuminate\Http\Request) {
            throw new HttpResponseException(response()->json([
                'data'=>request()->all(),
                'code'=>ResponseStatusCode::ParamError,
                'msg'=>$validator->getMessageBag()->first()
            ]));
        }

        throw (new ValidationException($validator))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }
}
