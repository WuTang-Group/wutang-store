<?php

namespace App\Services\Api;

use App\Handlers\MemberCodeHandler;
use App\Models\MemberCode;
use App\Services\Service;
use Illuminate\Support\Facades\Log;

class MemberCodeService extends Service
{
    private $memberCode;

    public function __construct(MemberCode $memberCode)
    {
        $this->memberCode = $memberCode;
    }

    // 为用户生成会员码(前端api)-用户提交资料后调用此接口
    public function generateMemberCode()
    {
        try {
            $member_code_query = $this->memberCode->firstWhere('user_id', $this->user()->id);
            if (!is_null($member_code_query)) {
                return false;
            }
            return $this->memberCode->create([
                'code' => MemberCodeHandler::generateCode(),
                'user_id' => $this->user()->id,
            ]);
        } catch (\Exception $e) {
            Log::error('会员码生成失败', ['message' => $e->getMessage()]);
            return false;
        }
    }

    // 绑定上级会员码
    public function bindParentCode($params)
    {
        try {
            // 上级
            $parent_code = $this->memberCode->whereCode($params->code)->firstOrFail();
            // 本级
            $current_code = $this->memberCode->where('user_id', $this->user()->id)->firstOrFail();

            $current_code->parent_id = $parent_code->parent_id;  // 关联上级code
            $current_code->level = $parent_code->level + 1;  // 等级在上级基础+1
            $current_code->save();
        } catch (\Exception $e) {
            Log::error('会员码绑定失败', ['message' => $e->getMessage()]);
            return false;
        }
    }

    // 校验会员码上级
    public function checkCodeParent()
    {
        $userMemberCode = MemberCode::whereUserId(auth('api')->user()->id)->first();
        if (!$userMemberCode) {
            return false; // 用户未申请会员码
        }
        if (!$userMemberCode->parent_id) {
            return false; // 用户未绑定上级会员码
        }
        // 上级会员码
        return auth('api')->user()->memberCode->code;
    }
}
