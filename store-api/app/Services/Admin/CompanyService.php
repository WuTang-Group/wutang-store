<?php
namespace App\Services\Admin;

use App\Models\Company;
use App\Services\Service;

class CompanyService extends Service
{
    private $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }


}
