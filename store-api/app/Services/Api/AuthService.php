<?php

namespace App\Services\Api;

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
            Log::error($e->getMessage());
            return false;
        }
        return $queries;
    }

    public function question(){
        try{
            $result = PasswordQuestion::all();
            return $result;
        }catch(\Exception $e){
            Log::error($e->getMessage());
            return false;
        }
    }

    public function get_question($username){
        // 获取用户的密保问题
        try{

            $result = User::join('password_questions', 'users.password_question_id', '=', 'password_questions.id')
                ->where('users.username', $username)
                ->select('users.username', 'users.password_question_id', 'password_questions.question')
                ->get();
            return $result;
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return false;
        }
    }

    public function reset($queries)
    {
        // 重置密码
        $password_question_id = $queries['password_question_id'];
        $password_answer = $queries['password_answer'];

        try{
            $user_info = User::where('username', $queries['username'])
                ->where('password_question_id', $password_question_id)
                ->where('password_answer', $password_answer)
                ->first();
        }catch(\Exception $e){
            Log::error($e->getMessage());
            return false;
        }
        if($user_info){
            $password = Hash::make($queries['password']);
            $user_info->update(['password'=>$password]);
            return true;
        }else{
            return false;
        }
    }

}
