<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Api\UserService;

class UserController extends Controller
{
    private $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    /**
     * Query user list
     * 查询用户数据列表
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {
        $results = $this->service->list();
        return response()->json(ResponseData::requestSuccess($results));
    }
}
