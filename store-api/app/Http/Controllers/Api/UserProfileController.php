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
     * @bodyParam profile_id required profile表id
     * @bodyParam phone 联系方式
     * @bodyParam real_name 真实姓名
     * @bodyParam sex 性别
     * @bodyParam birthday 生日
     * @bodyParam age 年龄
     * @bodyParam province 省
     * @bodyParam city 市
     * @bodyParam district 区/县
     * @bodyParam address 详细地址
     * @bodyParam zip 邮编
     * @param $profile_id
     * @param UserProfileRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function update($profile_id,UserProfileRequest $request)
    {
        $results = $this->service->update($profile_id,$request->all());
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
