<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Api\MemberCodeService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MemberCodeController extends Controller
{
    private $service;

    public function __construct(MemberCodeService $service)
    {
        $this->service = $service;
    }

    /**
     * Generate member code for user
     * 为用户生成会员码(注册后自动生成)
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function generateMemberCode(Request $request)
    {
        $result = $this->service->generateMemberCode();
        return $result ? response(ResponseData::requestSuccess($result)) : response(ResponseData::requestFails($request->all()));
    }

    /**
     * Request check mamber code parent
     * 请求验证会员码父级
     * @return Application|ResponseFactory|Response
     */
    public function checkCodeParent()
    {
        $checkCodeParent = $this->service->checkCodeParent();
        return $checkCodeParent ? response(ResponseData::requestSuccess($checkCodeParent)) : response(ResponseData::dataError('用户无会员码或未绑定上级'));
    }
}
