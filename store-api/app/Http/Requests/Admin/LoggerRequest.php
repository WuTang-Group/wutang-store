<?php

namespace App\Http\Requests\Admin;


use App\Http\Requests\FormRequest;

class LoggerRequest extends FormRequest
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
            case 'destroy':
            {
                return [
                    'ids' => 'required|array'
                ];
            }
        }
    }
}
