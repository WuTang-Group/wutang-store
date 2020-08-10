<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Api\UserAddressService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class UserAddressController extends Controller
{
    private $service;
    public function __construct(UserAddressService $service)
    {
        $this->service = $service;
    }

    /**
     * @return Application|ResponseFactory|Response
     */
    public function index()
    {
        $results = $this->service->queryList();
        return response(ResponseData::requestSuccess($results));
    }
}
