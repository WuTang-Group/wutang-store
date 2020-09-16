<?php
namespace App\Services\Admin;

use App\Models\TheHouseCategory;
use App\Services\Service;

class TheHouseCategoryService extends Service
{
    private $theHouseCategory;
    public function __construct(TheHouseCategory $theHouseCategory)
    {
        $this->theHouseCategory = $theHouseCategory;
    }

    public function getTheHouseCategoryList(array $param)
    {
        $requestData = page_limit($param);
        return $this->theHouseCategory->latest()->paginate($requestData['page_limit']);
    }
}
