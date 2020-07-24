<?php

namespace App\Services\Api;

use App\Enums\UserStatus;
use App\Models\User;
use App\Services\Service;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserService extends Service
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function list()
    {
        return $this->user->all();
    }

    public function update($username, $queries)
    {
        try {
            $user_info = $this->user->whereUsername($username);
            $user_info->update($queries);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
        return $user_info->get();
    }

    public function destroy($username)
    {
        try {
            // 用户状态改为-1，禁用
            $user_info = $this->user->whereUsername($username);
            $user_info->update(['status'=>UserStatus::Disabled]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
        return true;
    }

    public function password($username, $requires)
    {
        try{
            $newPasswordHash = Hash::make($requires->newPassword);   // 密码加密
            $this->user->whereUsername($username)->update(['password'=>$newPasswordHash]);  //更新密码
        }catch (\Exception $e){
            return false;
        }
        return true;
    }
}
