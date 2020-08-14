<?php

namespace App\Services\Admin;

use App\Enums\Roles;
use App\Models\Profile;
use App\Services\Service;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class UserProfileService extends Service
{
    private $profile;

    public function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

    public function queryList($queries)
    {
        $userRoles = $this->user()->getRoleNames();
        // 管理员
        if (Str::contains($userRoles, Roles::Admin)) {
            return $this->profile->paginate($queries['page_limit']);
        } else {
            return $this->profile->whereUserId($this->user()->id)->first();
        }
    }

    public function update($profile_id, $queries)
    {
        try {
            $userProfile = $this->profile->find($profile_id);
            $userProfile->update($queries);
        } catch (\Exception $e) {
            Log::error('编辑用户资料失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $userProfile;
    }

    public function destroy($queries)
    {
        try {
            $userProfile = $this->profile->find($queries);
            $userProfile->delete();
        } catch (\Exception $e) {
            Log::error('删除用户资料失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $queries;
    }
}
