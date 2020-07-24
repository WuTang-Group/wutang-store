<?php

namespace App\Services\Api;

use App\Models\User;
use App\Services\Service;

class UserService extends Service
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function list()
    {
        return $this->user->all();
    }
}
