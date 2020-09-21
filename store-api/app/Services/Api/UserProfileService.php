<?php

namespace App\Services\Api;

use App\Models\Profile;
use App\Services\Service;
use Illuminate\Support\Facades\Log;


class UserProfileService extends Service
{
    private $profile;

    public function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

    // 用户资料信息
    public function index()
    {
        return $this->profile->whereUserId($this->user()->id)->first();
    }

    // 更新用户资料
    public function update($params)
    {
        try {
//            $userProfile = $this->profile->whereUserId($this->user()->id);
//            $userProfile->user()->update($params->except('profile_id'));
            $userProfile = $this->user()->profile()->update($params->all());
            app(\App\Services\Api\MemberCodeService::class)->generateMemberCode();
        } catch (\Exception $e) {
            Log::error('用户资料编辑失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $userProfile;
    }

    // 删除用户资料
    public function destroy($queries)
    {
        try {
            $userProfile = $this->profile->find($queries);
            $userProfile->delete();
        } catch (\Exception $e) {
            Log::error('用户资料删除失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $queries;
    }
}
