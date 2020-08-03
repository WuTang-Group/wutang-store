<?php

namespace App\Http\Controllers\Api;

use App\Enums\Roles;
use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserRequest;
use App\Models\Traits\HashIdHelper;
use App\Models\User;
use App\Services\Api\UserService;
use Hashids;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class UserController extends Controller
{
    private $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    /**
     * Query user list(Admin)
     * 查询用户数据列表
     * @queryParam username 用户名(选填)
     * @queryParam page 页码，默认1
     * @queryParam page_limit 每页数量，默认20
     * @return \Illuminate\Http\JsonResponse
     */
    public function list(Request $request)
    {
        $requestData = page_limit($request);
        // 管理员
        $userRoles = $this->user()->getRoleNames();
        if (Str::contains($userRoles, Roles::Admin)) {
            if($requestData->username)
            {
                $results = User::where('username', $requestData->username)
                    ->active()->paginate($requestData['page_limit']);
            }else
            {
                $results = User::active()->paginate($requestData['page_limit']);
            }
            return response()->json(ResponseData::requestSuccess($results));
        } else {
            $res = User::whereId($this->user()->id)->get();
            return response()->json(ResponseData::requestSuccess($res));
        }


    }

    /**
     * Edit user(Admin)
     * 修改用户资料
     * @queryParam name 姓名
     * @queryParam email 邮箱
     * @queryParam phone 手机号
     * @queryParam avatar 头像
     * @param $username
     * @param UserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($username, Request $request)
    {
        $requestData = $request->only([
            'name',
            'email',
            'phone',
            'avatar'
        ]);
        $results = $this->service->update($username, $requestData);
        return $results ? response()->json(ResponseData::requestSuccess($results)) : response()->json(ResponseData::requestFails($requestData));
    }

    /**
     * delete User(Admin)
     * 删除用户
     * @param $username
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($username)
    {
        $results = $this->service->destroy($username);
        return $results ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::requestFails());
    }

    /**
     * change password(Admin)
     * 修改密码
     * @queryParam oldPassword required 旧密码
     * @queryParam newPassword required 新密码
     * @queryParam newPassword_confirmation required 确认密码
     * @param $username
     * @param UserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function password($username, UserRequest $request)
    {
        $oldPassword = $request->oldPassword;
        $newPassword = $request->newPassword;

        // 新密码不能与旧密码相同
        if ($oldPassword == $newPassword) {
            return response()->json(ResponseData::paramError(null, '新密码不能与旧密码相同'));
        }
        // 调用JWT方法验证用户名密码
        $token = Auth::guard('api')->attempt([
            'username' => $username,
            'password' => $oldPassword
        ]);
        if ($token) // 验证通过
        {
            $result = $this->service->password($username, $request);
            return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::requestFails());
        } else {
            return response()->json(ResponseData::paramError(null,'旧密码错误'));
        }

    }

    /**
     * Get user info
     * 获取单个用户信息
     * @queryParam hash_id required hash加密的ID
     * @param UserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function info(UserRequest $request)
    {
        $id = Hashids::decode($request->hash_id)[0];
        try
        {
            $res = $this->user()->find($id);
            return response()->json(ResponseData::requestSuccess($res));
        }
        catch (\Exception $e)
        {
            Log::error($e);
            return response()->json(ResponseData::paramError());
        }
    }


}
