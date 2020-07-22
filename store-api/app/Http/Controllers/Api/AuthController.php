<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\HttpResponseException;
use App\Helpers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AuthRequest;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     * 创建一个新的控制器实例
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Get a JWT via given credentials.
     * 通过登录信息获取JWT凭证
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws HttpResponseException
     */
    public function login(AuthRequest $request)
    {
        $username = $request->username;

        // 允许以邮箱或手机号
        filter_var($username, FILTER_VALIDATE_EMAIL) ? $credentials['email'] = $username : $credentials['phone'] = $username;
        $credentials['password'] = $request->password;
        $token = auth('api')->attempt($credentials);
        if (!$token) {
            throw new HttpResponseException(ResponseData::dataError($request->all(), '用户名或密码有误'));
        }
        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     * 获取通过身份验证的用户
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(ResponseData::requestSuccess(auth('api')->user()));
    }

    /**
     * Log the user out (Invalidate the token).
     * 注销用户
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth('api')->logout();

        return response()->json(ResponseData::requestSuccess(null,'注销成功'));
    }

    /**
     * Refresh a token.
     * 刷新token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }

    /**
     * Get the token array structure
     * 获取令牌组结构
     * @param $token
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondWithToken($token)
    {
        return response()->json(ResponseData::requestSuccess([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => auth('api')->factory()->getTTL()
        ]));
    }
}
