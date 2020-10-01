<?php

namespace App\Http\Controllers\Api;

use App\Enums\ContactUsType;
use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ContactUsRequest;
use App\Services\Api\ContactUsService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

/**
 * @group [API-ContactUs] Contact Us
 * 联系我们相关
 * type说明:(1订单相关,2普通咨询,3支持建议)
 * @authenticated
 * @package App\Http\Controllers\Api
 */
class ContactUsController extends Controller
{
    private $service;

    public function __construct(ContactUsService $service)
    {
        $this->service = $service;
    }

    /**
     * Get the contact type list
     * 获取联系我们类型列表
     * @return Application|ResponseFactory|Response
     */
    public function getTypeList()
    {
        $result = [
            'keys' => ContactUsType::getKeys(),
            'values' => ContactUsType::getValues()
        ];
        return response(ResponseData::requestSuccess($result));
    }

    /**
     * Store the contact us data
     * 写入联系我们的数据
     * @bodyParam name required string 姓名
     * @bodyParam type required integer 留言类型
     * @bodyParam order_no optional string 订单号
     * @bodyParam content required text 具体内容
     * @param ContactUsRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function store(ContactUsRequest $request)
    {
        $contactUs = $this->service->store($request);
        return $contactUs ? response(ResponseData::requestSuccess($contactUs)) : response(ResponseData::requestFails($request->all()));
    }

}
