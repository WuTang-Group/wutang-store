<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Roles;
use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\Traits\HashIdHelper;
use App\Models\User;
use App\Services\Admin\UserService;
use Exception;
use Hashids;
use Illuminate\{Contracts\Foundation\Application,
    Contracts\Routing\ResponseFactory,
    Http\JsonResponse,
    Http\Request,
    Http\Response,
    Support\Facades\Auth,
    Support\Facades\Log,
    Support\Str
};

/**
 * @group [ADMIN] User
 * 用户管理
 * @authenticated
 * @package App\Http\Controllers\Admin
 */
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
     * @return Application|ResponseFactory|JsonResponse|Response
     */
    public function queryList(Request $request)
    {
        // 管理员
//        $userRoles = $this->user()->getRoleNames();
//        if (Str::contains($userRoles, Roles::Admin)) {
//            if($requestData->username)
//            {
//                $results = User::where('username', $requestData->username)
//                    ->active()->paginate($requestData['page_limit']);
//            }else{
//                $results = User::with('profile')->active()->paginate($requestData['page_limit']);
//            }
//            return response()->json(ResponseData::requestSuccess($results));
//        } else {
//            $res = User::whereId($this->user()->id)->get();
//            return response()->json(ResponseData::requestSuccess($res));
//        }
        $users = $this->service->queryList($request);
        return response(ResponseData::requestSuccess($users));


    }

    /**
     * Request store user data
     * 请求新增用户数据
     * @bodyParam username string required 用户名
     * @bodyParam password string required 密码
     * @bodyParam name string required 姓名
     * @bodyParam role string required 角色名
     * @bodyParam company string required 公司
     * @bodyParam department string required 部门
     * @bodyParam sex integer optional 性别
     * @bodyParam phone integer optional 手机号
     * @bodyParam email string optional 邮箱
     * @bodyParam member_code string optional 会员码
     * @param UserRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function store(UserRequest $request)
    {
        $store = $this->service->store($request);
        return $store ? response(ResponseData::requestSuccess($store)) : response(ResponseData::requestFails($request->all()));
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
     * @return JsonResponse
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
     * Delete User(Admin)
     * 删除用户
     * @param $username
     * @return JsonResponse
     */
    public function destroy($username)
    {
        $results = $this->service->destroy($username);
        return $results ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::requestFails());
    }

    /**
     * Change password
     * 修改密码
     * @queryParam oldPassword required 旧密码
     * @queryParam newPassword required 新密码
     * @queryParam newPassword_confirmation required 确认密码
     * @param $username
     * @param UserRequest $request
     * @return JsonResponse
     */
    public function resetPassword($username, UserRequest $request)
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
            $result = $this->service->resetPassword($username, $request);
            return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::requestFails());
        } else {
            return response()->json(ResponseData::paramError(null, '旧密码错误'));
        }

    }

    /**
     * Get user info
     * 获取单个用户信息
     * @queryParam hash_id required hash加密的ID
     * @param UserRequest $request
     * @return JsonResponse
     */
    public function info(UserRequest $request)
    {
        $id = Hashids::decode($request->hash_id)[0];
        try {
            $res = $this->user()->with('profile')->find($id);
            return response()->json(ResponseData::requestSuccess($res));
        } catch (Exception $e) {
            Log::error($e);
            return response()->json(ResponseData::paramError());
        }
    }


}
