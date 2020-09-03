<?php

namespace App\Http\Controllers\Admin\Payment;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Payment\AlipayLegacyExpressRequest;
use App\Services\Admin\Payment\AlipayLegacyExpressService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AlipayLegacyExpressController extends Controller
{
    private $service;

    public function __construct(AlipayLegacyExpressService $service)
    {
        $this->service = $service;
    }

    /**
     * Request get alipay legacy express list
     * 获取支付宝即时支付-列表
     * @queryParam page optional 页码
     * @queryParam page_limit optional 分页条数
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function index(Request $request)
    {
        $result = $this->service->index($request);
        return response(ResponseData::requestSuccess($result));
    }

    /**
     * Request store alipay legacy express data
     * 请求写入支付宝即时支付数据
     * @bodyParam items array required 数组名称
     * @bodyParam items.*.pid string required 商户id
     * @bodyParam items.*.key string required 商户密钥
     * @bodyParam items.*.seller_email email required 卖家支付宝账号
     * @param AlipayLegacyExpressRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function store(AlipayLegacyExpressRequest $request)
    {
        $result = $this->service->store($request);
        return $result ? response(ResponseData::requestSuccess($result)) : response(ResponseData::requestFails($request->all()));
    }

    /**
     * Request update alipay legacy express data
     * 请求更新支付宝即时支付数据
     * @queryParam id required id值
     * @param $id
     * @param AlipayLegacyExpressRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function update($id, AlipayLegacyExpressRequest $request)
    {
        $result = $this->service->update($id,$request);
        return $result ? response(ResponseData::requestSuccess($result)) : response(ResponseData::requestFails($request->all()));
    }

    /**
     * Request delete alipay legacy express data
     * 请求删除支付宝即时支付数据
     * @queryParam items required array名称
     * @querParam items.*.id required 数组内id
     * @param AlipayLegacyExpressRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function delete(AlipayLegacyExpressRequest $request)
    {
        $result = $this->service->delete($request);
        return $result ? response(ResponseData::requestSuccess($result)) : response(ResponseData::requestFails($request->all()));
    }
}