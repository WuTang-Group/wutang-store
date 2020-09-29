<?php

namespace App\Services\Admin;

use App\Models\Company;
use App\Services\Service;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CompanyService extends Service
{
    private $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    // 公司列表
    public function getList(object $params)
    {
        $requestData = page_limit($params->all());
        // distinct()与laest()同用会无法去重
        return $this->company->distinct()->paginate($requestData['page_limit']);
    }

    // 根据公司获取该公司下的部门列表
    public function getDepartmentListByCompany(string $companyName)
    {
        try {
            return $this->company->whereName($companyName)->with(['departments'])->firstOrFail()->departments;
        } catch (ModelNotFoundException $e) {
            return [];
        }
    }


}
