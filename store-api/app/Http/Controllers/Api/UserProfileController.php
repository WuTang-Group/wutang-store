<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserProfileRequest;
use App\Services\Api\MemberCodeService;
use App\Services\Api\UserProfileService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group [API] User profile
 * 用户资料管理
 * @authenticated
 * @package App\Http\Controllers\Api
 */
class UserProfileController extends Controller
{
    private $service;
    private $memberCodeService;

    public function __construct(UserProfileService $service, MemberCodeService $memberCodeService)
    {
        $this->service = $service;
        $this->memberCodeService = $memberCodeService;
    }

    /**
     * Get user profile
     * 用户资料信息
     * @return Application|ResponseFactory|Response
     */
    public function index()
    {
        return response(ResponseData::requestSuccess($this->service->index()));
    }

    /**
     * Update user profile
     * 编辑用户资料(要求提示用户填写真实信息)
     * @queryParam phone 联系方式
     * @queryParam real_name required 真实姓名
     * @queryParam sex required 性别
     * @queryParam birthday 生日
     * @queryParam age 年龄
     * @queryParam province 省
     * @queryParam city 市
     * @queryParam district 区/县
     * @queryParam address 详细地址
     * @queryParam zip 邮编
     * @param UserProfileRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function update(UserProfileRequest $request)
    {
        $results = $this->service->update($request);
        return $results ? response(ResponseData::requestSuccess($results)) : response(ResponseData::requestFails($request->all()));
    }

    /**
     * Bind member code
     * 绑定上级(tips:需提交个人资料后方能提交绑定上级，否则会不予通过)
     * @bodyParam code string required 上级会员码
     * @param UserProfileRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function bindParentMemberCode(UserProfileRequest $request)
    {
        $results = $this->memberCodeService->bindParentCode($request);
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
