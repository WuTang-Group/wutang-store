<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserAddressRequest;
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
     * Query user address list
     *  用户地址列表
     * @param UserAddressRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function list(UserAddressRequest $request)
    {
        $requestData = page_limit($request->all());
        return response(ResponseData::requestSuccess($this->service->list($requestData)));
    }

    public function store(UserAddressRequest $request)
    {
        $requestData = $request->only([
            'province',
            'city',
            'district',
            'address',
            'zip',
            'contact_name',
            'contact_phone',
        ]);
    }
}
