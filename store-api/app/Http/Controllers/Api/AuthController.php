<?php

namespace App\Http\Controllers\Api;

use App\Enums\LoggerCollection;
use App\Exceptions\HttpResponseException;
use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AuthRequest;
use App\Models\User;
use App\Services\Api\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

/**
 * @group [API] Auth
 * 授权管理
 * @package App\Http\Controllers\Api
 */
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
        $this->middleware('auth:api', ['except' => [
            'login', 'register', 'getQuestionList', 'getUserQuestion', 'resetPassword'
        ]]);
        $this->authService = $authService;
        config(['logging.channels.mongodb.collection' => LoggerCollection::LoginLog]);
    }

    /**
     * Get a JWT via given credentials.
     * 通过登录信息获取JWT凭证
     * @bodyParam username string required 用户名
     * @bodyParam password string required 密码
     * @param AuthRequest $request
     * @return JsonResponse
     * @throws HttpResponseException
     */
    public function login(AuthRequest $request)
    {
        $token = auth('api')->attempt($request->all());
        if (!$token) {
            throw new HttpResponseException(ResponseData::dataError($request->all(), '用户名或密码有误'));
        }
        \Log::info('用户登录',[
            'username' => $request->username,
            'status' => '成功',
            'login_time' => now()->toDateTimeString(),
            'ip' =>$request->ip()
        ]);
        return $this->respondWithToken($token);
    }

    /**
     * Register user
     * 用户注册
     * (PS:密保问题接口=>Get password question list;
     * 验证码接口=>Generate captcha code and save to cache)
     * @bodyParam name string required 姓名
     * @bodyParam username string required 账号(允许:英文字符/数字/字符+数字)
     * @bodyParam password string required 密码
     * @bodyParam password string password_confirmation required 确认密码
     * @bodyParam code string 会员码(本人申请的)
     * @bodyParam captcha_key string required 验证码的key
     * @bodyParam captcha_code string required 验证码的code
     * @bodyParam password_question_id integer required 密保问题ID
     * @bodyParam password_answer string required 密保问题答案
     * @param AuthRequest $request
     * @return JsonResponse
     * @throws HttpResponseException
     */
    public function register(AuthRequest $request)
    {
        $captchaData = \Cache::get($request->captcha_key);
        if (!$captchaData) {
            throw new HttpResponseException(ResponseData::dataError($request->captcha_code, '验证码无效'));
        }
        if (!hash_equals(strtolower($captchaData['code']), strtolower($request->captcha_code))) {
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
     * @return JsonResponse
     */
    public function me()
    {
        return response()->json(ResponseData::requestSuccess($this->userInfo()));
    }

    /**
     * Log the user out (Invalidate the token).
     * 注销用户
     *
     * @return JsonResponse
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
     * @return JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }

    /**
     * Get the token array structure
     * 获取令牌组结构
     * @param $token
     * @return JsonResponse
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
     * @return JsonResponse
     */
    public function getQuestionList()
    {
        $result = $this->authService->getQuestionList();
        return $result ? response()->json(ResponseData::requestSuccess($result)) : response()->json(ResponseData::dataError());
    }

    /**
     * Get user password question
     * 获取用户的密保问题
     * @queryParam username required 用户名
     * @param AuthRequest $request
     * @return JsonResponse
     */
    public function getUserQuestion(AuthRequest $request)
    {
        $result = $this->authService->getUserQuestion($request->username);
        return $result ? response()->json(ResponseData::requestSuccess($result)) : response()->json(ResponseData::dataError());
    }

    /**
     * Reset password
     * 重置密码(未登录)
     * @queryParam username required 用户名
     * @queryParam password_question_id required 密保问题ID
     * @queryParam password_answer required 密保问题的答案
     * @queryParam password required 密码
     * @queryParam password_confirmation required 二次确认密码
     * @param AuthRequest $request
     * @return JsonResponse
     */
    public function resetPassword(AuthRequest $request)
    {
        $result = $this->authService->resetPassword($request);
        return $result ? response()->json(ResponseData::requestSuccess($result, '密码重置成功')) : response()->json(ResponseData::dataError($request->all(), '重置失败,请检查密保答案或用户'));
    }

    /**
     * Change password
     * 修改密码(已登录)
     * @bodyParam oldPassword string required 旧密码
     * @bodyParam newPassword string required 新密码
     * @bodyParam newPassword_confirmation string required 确认密码
     * @param AuthRequest $request
     * @return JsonResponse
     */
    public function changePassword(AuthRequest $request)
    {
        $oldPassword = $request->oldPassword;
        $newPassword = $request->newPassword;
        $username = $this->user()->username;

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
            $result = $this->authService->changePassword($username, $request);
            return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::requestFails());
        } else {
            return response()->json(ResponseData::paramError(null,'旧密码错误'));
        }

    }
}
