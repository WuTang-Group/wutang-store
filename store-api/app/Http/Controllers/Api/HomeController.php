<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Api\HomeService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

/**
 * @group [API-Home] Index
 * 首页数据类
 * @package App\Http\Controllers\Api
 */
class HomeController extends Controller
{
    private $service;

    /**
     * HomeController constructor.
     * base64:6Kej56CB5pyJ5oOK5Zac77yM6Kej56CB5Zmo5Zyo5Yqp5omL5Ye95pWw5YaF77yM5LiL5pa55Li65a+G5paH
     * ⬇⬇
     * 6L+Z5Li2KM3s1oJVz6n0v41NmgksDKVh5rq5YWs5Y+45rKh5pyJ5bm057uI5aWW77yM5Yqg54+t5rKh5pyJ5Yqg54+t6LS577yM6ZyA5rGC5oC75piv5LiN5piO56Gu77yM6aKG5a+85a+55Lq65LiN5YWs5bmz77yM5Yir5oyH5pyb5LqGO+WPpuWklui/meS4qumhueebruacieW+iOWkmuaEj+WklueahOmbt++8jOS9oOWdmuaMgeS4jeS6huWkmuS5heeahO+8jOelneWlve+8gQ==1AkO72KM3s1oJVz6n0v41NmgksDKVh5r2Rf/eJ2uzDw
     */
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
