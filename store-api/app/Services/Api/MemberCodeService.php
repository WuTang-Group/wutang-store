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

    // 绑定上级会员码(即获取输入会员码的id，取代users表内的member_code_id)
    // 注意：是绑定用户的上级，不是会员码的上级；即为用户绑定会员码
    public function bindParentCode(object $params)
    {
        try {
            // 若用户未绑定会员码，则先绑定。不允许用户绑定自己的会员码
            if ($this->user()->member_code_id) {
                return false;  // 已绑定上级会员码,无法再次绑定
            }
            $memberCode = $this->memberCode->whereCode($params->code)->first();
            if ($this->user()->id == $memberCode->user_id) {
                return false; // 不允许绑定自身会员码
            }
            $this->user()->member_code_id = $memberCode->id;
            $this->user()->save();
            // 绑定了上级会员码，本级会员码(若有)则在该上级会员码的level基础上+1
            $current_user_code = $this->memberCode->whereUserId($this->user()->id)->first();
            if ($current_user_code) {
                $current_user_code->level = $memberCode->level + 1;
                $current_user_code->save();
            }
            return $params->code;
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
