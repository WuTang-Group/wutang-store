<?php

namespace App\Services\Api;

use App\Models\MemberCode;
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
        $profile = $this->profile->whereUserId($this->user()->id)->first();
        $profile->member_code = MemberCode::whereUserId($this->user()->id)->value('code') ?? '';  // 增加返回用户会员码
        $profile->parent_member_code = $profile->member_code ? MemberCode::whereId($this->user()->member_code_id)->value('code') : '';
        return $profile;
    }

    // 更新用户资料
    public function update($params)
    {
        try {
//            $userProfile = $this->profile->whereUserId($this->user()->id);
//            $userProfile->user()->update($params->except('profile_id'));
            $userProfile = $this->user()->profile()->update($params->all());
            $memberCode = app(\App\Services\Api\MemberCodeService::class)->generateMemberCode();
            // 如果有上级会员码，则自身会员码level从该上级会员码基础上+1
            $parentMemberCode = MemberCode::whereId($this->user()->member_code_id)->first();
            if ($parentMemberCode) {
                $memberCode->level = $parentMemberCode->level + 1;
                $memberCode->save();
            }
            return $userProfile;
        } catch (\Exception $e) {
            Log::error('用户资料编辑失败', ['message' => $e->getMessage()]);
            return false;
        }
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
