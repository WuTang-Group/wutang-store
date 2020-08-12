<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserProfileRequest;
use App\Services\Api\UserProfileService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class UserProfileController extends Controller
{
    private $service;

    public function __construct(UserProfileService $service)
    {
        $this->service = $service;
    }

    /**
     * User profile list
     * 用户资料信息
     * @param UserProfileRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function index(UserProfileRequest $request)
    {
        $requestData = page_limit($request->all());
        return response(ResponseData::requestSuccess($this->service->index($requestData)));
    }

    /**
     * Update user profile
     * 编辑用户资料
     * @queryParam profile_id required profile表id
     * @queryParam phone 联系方式
     * @queryParam real_name 真实姓名
     * @queryParam sex 性别
     * @queryParam birthday 生日
     * @queryParam age 年龄
     * @queryParam province 省
     * @queryParam city 市
     * @queryParam district 区/县
     * @queryParam address 详细地址
     * @queryParam zip 邮编
     * @param $profile_id
     * @param UserProfileRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function update(UserProfileRequest $request)
    {
        $results = $this->service->update($request->all());
        return $results ? response(ResponseData::requestSuccess($results)) : response(ResponseData::requestFails($request->all()));
    }

    /**
     * Destroy user profile
     * 删除用户资料
     * @queryParam profile_id required profile表id
     * @param $profile_id
     * @return Application|ResponseFactory|Response
     */
    public function destroy($profile_id)
    {
        $results = $this->service->destroy($profile_id);
        return $results ? response(ResponseData::requestSuccess($results)) : response(ResponseData::requestFails());
    }

}
