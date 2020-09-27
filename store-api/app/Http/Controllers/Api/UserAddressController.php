<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserAddressRequest;
use App\Services\Api\UserAddressService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group [API] User address
 * 用户地址管理
 * @authenticated
 * @package App\Http\Controllers\Api
 */
class UserAddressController extends Controller
{
    private $service;

    public function __construct(UserAddressService $service)
    {
        $this->service = $service;
    }

    /**
     * Get user address
     * 获取用户收货地址
     * @return Application|ResponseFactory|Response
     */
    public function index()
    {
        $results = $this->service->queryList();
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Create user address
     * 新增用户收货地址
     * @bodyParam province string required 省
     * @bodyParam city string required 市
     * @bodyParam district string required 区
     * @bodyParam address string required 详细地址
     * @bodyParam zip integer required 邮编
     * @bodyParam contact_name string required 联系人
     * @bodyParam contact_phone integer required 手机号
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

    /**
     * Edit user address
     * 编辑用户地址
     * @queryParam province 省
     * @queryParam city 市
     * @queryParam district 区
     * @queryParam address 详细地址
     * @queryParam zip 邮编
     * @queryParam contact_name 联系人
     * @queryParam contact_phone 手机号
     * @param $address_id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit($address_id, Request $request)
    {
        $result = $this->service->edit($address_id, $request->all());
        return $result ? response()->json(ResponseData::requestSuccess($result)) : response()->json(ResponseData::requestFails());
    }

    /**
     * Destroy user Address(API)
     * 删除用户地址
     * @param $address_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($address_id)
    {
        $result = $this->service->destroy($address_id);
        return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::requestFails());
    }
}
