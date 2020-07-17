<?php

namespace App\Exceptions;

use Exception;

class HttpResponseException extends Exception
{
    public $messages;  // 自定义message
    public $code;

    public function __construct($messages = [], $code = 200)
    {
        $this->messages = $messages;
        $this->code = $code;
    }

    public function render()
    {
        return response()->json($this->messages, $this->code);
    }
}
