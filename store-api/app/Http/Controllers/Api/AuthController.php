<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\HttpResponseException;
use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AuthRequest;
use App\Models\User;
use App\Services\Api\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     * 创建一个新的控制器实例
     *
     * @return void
     */
    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->middleware('auth:api', ['except' => ['login', 'register', 'questions', 'get_question', 'reset']]);
        $this->authService = $authService;
    }

    /**
     * Get a JWT via given credentials.
     * 通过登录信息获取JWT凭证
     * @queryParam username required 用户名
     * @queryParam password required 密码
     * @return \Illuminate\Http\JsonResponse
     * @throws HttpResponseException
     */
    public function login(AuthRequest $request)
    {
        $token = auth('api')->attempt($request->all());
        if (!$token) {
            throw new HttpResponseException(ResponseData::dataError($request->all(), '用户名或密码有误'));
        }
        return $this->respondWithToken($token);
    }

    /**
     * Register user
     * 用户注册
     * @queryParam name required 姓名
     * @queryParam username required 账号(允许:英文字符/数字/字符+数字)
     * @queryParam password required 密码
     * @queryParam password_confirmation required 确认密码
     * @queryParam captcha_key required 验证码的key
     * @queryParam captcha_code required 验证码的code
     * @queryParam password_question_id required 密保问题ID
     * @queryParam password_answer required 密保问题答案
     * @param AuthRequest $request
     * @param AuthService $authService
     * @return \Illuminate\Http\JsonResponse
     * @throws HttpResponseException
     */
    public function register(AuthRequest $request)
    {
        $captchaData = \Cache::get($request->captcha_key);
        if (!$captchaData) {
            throw new HttpResponseException(ResponseData::dataError($request->captcha_code, '验证码无效'));
        }
        if (!hash_equals(strtolower($captchaData['code']), $request->captcha_code)) {
            // 验证错误就清除缓存
            \Cache::forget($request->captcha_key);
            throw new HttpResponseException(ResponseData::dataError($request->captcha_code, '验证码错误'));
        }
        $user = User::whereUsername($request->username)->first();
        if ($user) {
            // 清除验证码缓存
            \Cache::forget($request->captcha_key);
            throw new HttpResponseException(ResponseData::requestDeny($request->username, '用户已存在'));
        }
        // 传参到service处理
        $results = $this->authService->register($request->all());
        return $results ? response()->json(ResponseData::requestSuccess($results)) : response()->json(ResponseData::requestFails());
    }

    /**
     * Get the authenticated User.
     * 获取通过身份验证的用户
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(ResponseData::requestSuccess($this->userInfo()));
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

        return response()->json(ResponseData::requestSuccess(null, '注销成功'));
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

    /**
     * Get password question list
     * 获取密保问题列表
     * @param AuthService $authService
     * @return \Illuminate\Http\JsonResponse
     */
    public function questionList()
    {
        $result = $this->authService->question();
        return $result ? response()->json(ResponseData::requestSuccess($result)) : response()->json(ResponseData::dataError());
    }

    /**
     * get user password question
     * 获取用户的密保问题
     * @queryParam username required 用户名
     * @param AuthService $authService
     * @param $username
     * @return \Illuminate\Http\JsonResponse
     */
    public function getQuestion(AuthRequest $request)
    {
        $result = $this->authService->getQuestion($request->username);
        return $result ? response()->json(ResponseData::requestSuccess($result)) : response()->json(ResponseData::dataError());
    }

    /**
     * reset password
     * 重置密码
     * @queryParam username required 用户名
     * @queryParam password_question_id required 密保问题ID
     * @queryParam password_answer required 密保问题的答案
     * @queryParam password required 密码
     * @queryParam password_confirmation required 二次确认密码
     * @param AuthRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function resetPassword(AuthRequest $request)
    {
        $result = $this->authService->reset($request->all());
        return $result ? response()->json(ResponseData::requestSuccess(null, '密码重置成功')) : response()->json(ResponseData::dataError(null, '密保问题或答案不正确'));
    }
}
