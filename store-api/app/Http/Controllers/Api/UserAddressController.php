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

    /**
     * Create user address
     * @queryParam province required 省
     * @queryParam city required 市
     * @queryParam district required 区
     * @queryParam address required 详细地址
     * @queryParam zip required 邮编
     * @queryParam contact_name required 联系人
     * @queryParam contact_phone required 手机号
     * @param UserAddressRequest $request
     * @return Application|ResponseFactory|Response
     */
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
        $results = $this->service->store($requestData);
        return $results ? response(ResponseData::requestSuccess($results)) : response(ResponseData::requestFails($requestData));
    }
}
