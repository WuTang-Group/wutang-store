<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Admin\MemberCodeService;
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
     * Get member code list
     * 获取会员码列表
     * @quryParam parent_id optional 父级id
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function index(Request  $request)
    {
        $result = $this->service->index($request);
        return response(ResponseData::requestSuccess($result));
    }
}
