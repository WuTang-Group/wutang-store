<?php
namespace App\Services\Api;

use App\Models\InvitationCode;
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
            DB::transaction(function() use ($queries) {
                $queries['password'] = Hash::make($queries['password']);
                $this->user->create($queries);
                // 递减邀请码库存
                InvitationCode::whereCode($queries['invitation_code'])->increment('usage_times');
                // 清除验证码缓存
                \Cache::forget($queries['captcha_key']);
            });
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
        return $queries;
    }
}
