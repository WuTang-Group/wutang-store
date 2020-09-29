<?php
namespace App\Services\Admin\Permission;

use App\Services\Service;
use App\Models\Role;

class RoleService extends Service
{
    private $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function getList()
    {
        return $this->role->get();
    }

}
