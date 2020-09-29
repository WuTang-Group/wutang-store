<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Admin\Permission\RoleService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RoleController extends Controller
{
    private $service;

    public function __construct(RoleService $service)
    {
        $this->service = $service;
    }

    /**
     * Request get role list
     * 获取角色列表
     * @return Application|ResponseFactory|Response
     */
    public function getList()
    {
        $roleCollection = $this->service->getList();
        return response(ResponseData::requestSuccess($roleCollection));
    }

}
