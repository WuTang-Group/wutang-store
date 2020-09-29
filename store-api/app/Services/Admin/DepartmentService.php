<?php
namespace App\Services\Admin;

use App\Models\Department;
use App\Services\Service;

class DepartmentService extends Service
{
    private $department;

    public function __construct(Department $department)
    {
        $this->department = $department;
    }

    public function getList()
    {
        return $this->department->get();
    }

}
