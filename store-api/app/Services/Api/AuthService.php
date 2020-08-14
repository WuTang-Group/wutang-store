<?php

namespace App\Services\Api;

use App\Enums\LoggerCollection;
use App\Enums\Roles;
use App\Models\PasswordQuestion;
use App\Models\Profile;
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
    public function register($queries)
    {
        try {
            DB::transaction(function () use ($queries) {
                $queries['password'] = Hash::make($queries['password']);
                $user = $this->user->create($queries);
//                // 递减邀请码库存
//                InvitationCode::whereCode($queries['invitation_code'])->increment('usage_times');
                // 清除验证码缓存
                \Cache::forget($queries['captcha_key']);
                // 默认分配注册用户customer角色
                $user->assignRole(Roles::Customer);
                // 用户注册成功自动在profile表新建占位数据行
                Profile::create(['user_id' => $user->id]);
            });
        } catch (\Exception $e) {
            Log::error('用户注册失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $queries;
    }

    public function questions()
    {
        return $result = PasswordQuestion::all();
    }

    public function getQuestion($username)
    {
        // 获取用户的密保问题
        try {
            $result = User::join('password_questions', 'users.password_question_id', '=', 'password_questions.id')
                ->where('users.username', $username)
                ->select('users.username', 'users.password_question_id', 'password_questions.question')
                ->get();
        } catch (\Exception $e) {
            Log::error('用户密保问题获取失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $result;
    }

    public function resetPassword($queries)
    {
        // 重置密码
        $password_question_id = $queries['password_question_id'];
        $password_answer = $queries['password_answer'];

        $user_info = User::where('username', $queries['username'])
            ->where('password_question_id', $password_question_id)
            ->where('password_answer', $password_answer)
            ->first();

        try {
            $password = Hash::make($queries['password']);
            $user = $user_info->update(['password' => $password]);
        } catch (\Exception $e) {
            Log::error('重置用户密码失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $user;
    }

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
