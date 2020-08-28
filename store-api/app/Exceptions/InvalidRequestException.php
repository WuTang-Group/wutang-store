<?php

namespace App\Exceptions;

use App\Handlers\ResponseData;
use Exception;
use Illuminate\Http\Request;

class InvalidRequestException extends Exception
{
    public function __construct(string $message = "", int $code = 400)
    {
        parent::__construct($message, $code);
    }

    public function render(Request $request)
    {
        // 如果是json则返回json格式的报错
        if ($request->expectsJson()) {
            return response(ResponseData::requestFails($request->all(),$this->message));
//            return response()->json(['msg' => $this->message], $this->code);
        }

        return view('pages.error', ['msg' => $this->message]);
    }
}
