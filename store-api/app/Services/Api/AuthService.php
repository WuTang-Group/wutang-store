<?php

namespace App\Services\Api;

use App\Enums\LoggerCollection;
use App\Enums\Roles;
use App\Models\MemberCode;
use App\Models\PasswordQuestion;
use App\Models\User;
use App\Services\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthService extends Service
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
        config(['logging.channels.mongodb.collection' => LoggerCollection::AuthLog]);
    }

    /**
     * 注册
     * @param $queries
     * @return bool
     */
    public function register($params)
    {
        $requestData = $params->except('code');
        try {
            DB::transaction(function () use ($requestData, $params) {
                $requestData['password'] = Hash::make($requestData['password']);
                $user = $this->user->create($requestData);
//                // 递减邀请码库存
//                InvitationCode::whereCode($queries['invitation_code'])->increment('usage_times');
                // 清除验证码缓存
                \Cache::forget($requestData['captcha_key']);
                // 默认分配注册用户customer角色
                $user->assignRole(Roles::Customer);
                // 为用户绑定会员码
                if ($params->has('code')) {
                    $member_code = MemberCode::firstWhere('code', $params->code);
                    $user->member_code_id = $member_code->id;
                    $user->save();
                }
                // 用户注册成功自动在profile表新建占位数据行
                $user->profile()->create(['birthday' => now()]);
            });
        } catch (\Exception $e) {
            Log::error('用户注册失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $params;
    }

    // 密保问题列表
    public function getQuestionList()
    {
        return PasswordQuestion::all();
    }

    // 获取用户对应的密保问题
    public function getUserQuestion($username)
    {
        // 获取用户的密保问题(返回对象虽为蛇形，但本质上还是小驼峰，所以获取时需写为小驼峰)
        return User::with(['passwordQuestion'])->firstWhere('username', $username)->passwordQuestion;
    }

    // 重置密码(未登录)
    public function resetPassword($params)
    {
        // 重置密码
        $requestData = $params->except(['password_confirmation', 'password']);
        try {
            $user = User::where($requestData)->firstOrFail();
            $user->password = Hash::make($params->password);
            $user->save();
            return $user;
        } catch (\Exception $e) {
            Log::error('重置用户密码失败', ['message' => $e->getMessage()]);
            return false;
        }
    }

    // 更改密码(已登录)
    public function changePassword($username, $requires)
    {
        try {
            $newPasswordHash = Hash::make($requires->newPassword);   // 密码加密
            $user = $this->user->whereUsername($username)->update(['password' => $newPasswordHash]);  //更新密码
        } catch (\Exception $e) {
            Log::error('修改用户密码失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $user;
    }

}
