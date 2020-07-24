<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserProfileRequest;
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
    public function list(UserProfileRequest $request)
    {
        $requestData = page_limit($request->all());
        return response(ResponseData::requestSuccess($this->service->list($requestData)));
    }

    /**
     * Update user profile
     * 编辑用户资料
     * @queryParam profie_id required profile表id
     * @param $profile_id
     * @param UserProfileRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function update($profile_id,UserProfileRequest $request)
    {
        $requestData = $request->only([
            'real_name',
            'sex',
            'birthday',
            'age',
        ]);
        $results = $this->service->update($profile_id,$requestData);
        return $results ? response(ResponseData::requestSuccess($results)) : response(ResponseData::requestFails($requestData));
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
