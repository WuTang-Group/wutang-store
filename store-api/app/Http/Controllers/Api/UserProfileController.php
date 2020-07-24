<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\UserProfileService;

class UserProfileController extends Controller
{
    private $service;

    public function __construct(UserProfileService $service)
    {
        $this->service = $service;
    }


}
