<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
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
    public function queryList(UserAddressRequest $request)
    {
        $requestData = page_limit($request->all());
        return response(ResponseData::requestSuccess($this->service->queryList($requestData)));
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

    /**
     * Update user address
     * 编辑用户地址
     * @queryParam address_id required address表id
     * @queryParam province required 省
     * @queryParam city required 市
     * @queryParam district required 区
     * @queryParam address required 详细地址
     * @queryParam zip required 邮编
     * @queryParam contact_name required 联系人
     * @queryParam contact_phone required 手机号
     * @param $address_id
     * @param UserAddressRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function update($address_id,UserAddressRequest $request)
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
        $results = $this->service->update($address_id,$requestData);
        return $results ? response(ResponseData::requestSuccess($results)) : response(ResponseData::requestFails($requestData));
    }

    /**
     * Destroy user address
     * 删除用户地址
     * @queryParam address_id required address表id
     * @param $address_id
     * @return Application|ResponseFactory|Response
     */
    public function destroy($address_id)
    {
        $results = $this->service->destroy($address_id);
        return $results ? response(ResponseData::requestSuccess($results)) : response(ResponseData::requestFails());
    }
}
