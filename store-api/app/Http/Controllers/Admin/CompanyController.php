<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Admin\CompanyService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group [ADMIN] Company manage
 * @authenticated
 * 公司管理
 * @package App\Http\Controllers\Admin
 */
class CompanyController extends Controller
{
    private $service;

    public function __construct(CompanyService $service)
    {
        $this->service = $service;
    }

    /**
     * Get company list
     * 获取公司列表
     * @queryParam page 页码
     * @queryParam page_limit 显示条目
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function getList(Request $request)
    {
        $companies = $this->service->getList($request);
        return response(ResponseData::requestSuccess($companies));
    }

    /**
     * Get depatments by company id
     * 根据公司ID获取下辖部门列表
     * @urlParam company_id 公司id
     * @param $company_name
     * @return Application|ResponseFactory|Response
     */
    public function getDepartmentListByCompany($company_name)
    {
        $departmentCollection = $this->service->getDepartmentListByCompany($company_name);
        return response(ResponseData::requestSuccess($departmentCollection));
    }

}
