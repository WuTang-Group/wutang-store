<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoggerRequest;
use App\Services\Admin\LoggerService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group [ADMIN] Logger
 * 日志管理
 * @authenticated
 * @package App\Http\Controllers\Admin
 */
class LoggerController extends Controller
{
    private $service;

    public function __construct(LoggerService $service)
    {
        $this->service = $service;
    }

    /**
     * Get logs list
     * 获取日志列表
     * @queryParam page optional 页码
     * @queryParam page_limit optional 每页显示数目
     * @param $collection
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function queryList($collection,Request $request)
    {
        $results = $this->service->systemLogList($collection,$request);
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Destroy logs
     * 删除日志(支持删除多条数据)
     * @queryParam ids required ID值(array)
     * @param $collection
     * @param LoggerRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function destroy($collection,LoggerRequest $request)
    {
        $results = $this->service->systemLogDestroy($collection,$request);
        return $results ? response(ResponseData::requestSuccess($results)) : response(ResponseData::requestFails($request->all()));
    }
}
