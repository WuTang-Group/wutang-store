<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Api\MemberCodeService;
use Illuminate\Http\Request;

class MemberCodeController extends Controller
{
    private $service;

    public function __construct(MemberCodeService $service)
    {
        $this->service = $service;
    }

    public function generateMemberCode(Request $request)
    {
        $result = $this->service->generateMemberCode();
        return $result ? response(ResponseData::requestSuccess($result)) : response(ResponseData::requestFails($request->all()));
    }
}
