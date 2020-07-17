<?php

namespace App\Exceptions;

use Exception;

class HttpResponseException extends Exception
{
    public $messages;  // 自定义message
    public $status;    // Http状态码

    public function __construct($messages = [], $status = 200)
    {
        $this->messages = $messages;
        $this->status = $status;
    }

    public function render()
    {
        return response($this->messages, $this->status);
    }
}
