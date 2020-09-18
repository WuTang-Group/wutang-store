<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Api\HomeService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    private $service;

    public function __construct(HomeService $service)
    {
        $this->service = $service;
    }

    /**
     * Get Home data list
     * 获取首页数据信息列表
     * @return Application|ResponseFactory|Response
     */
    public function getList()
    {
        $list = $this->service->getList();
        return response(ResponseData::requestSuccess($list));
    }

}
