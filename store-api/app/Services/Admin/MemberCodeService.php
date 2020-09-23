<?php
namespace App\Services\Admin;

use App\Models\MemberCode;
use App\Services\Service;

class MemberCodeService extends Service
{
    private $memberCode;

    public function __construct(MemberCode $memberCode)
    {
        $this->memberCode = $memberCode;
    }

    // 会员码无限级列表-默认从0(一级)开始获取
    public function index($params)
    {
        $requestData = $params->only('parent_id');
        $parentId = $requestData['parent_id'] ?? 0;
        return MemberCode::with(['children'])->whereParentId($parentId)->get();
    }

    public function memberCodeDetail($member_code)
    {
        return $this->memberCode->with('user')->where('code', $member_code)->first();
    }
}
