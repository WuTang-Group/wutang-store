<?php
namespace App\Services\Admin;

use App\Models\TheHouseContent;
use App\Services\Service;

class TheHouseContentService extends Service
{
    private $theHouseContent;
    public function __construct(TheHouseContent $theHouseContent)
    {
        $this->theHouseContent = $theHouseContent;
    }

    public function getTheHouseContentList(array $param)
    {
        $requestData = page_limit($param);
        return TheHouseContent::with('theHouse')->latest()->paginate($requestData['page_limit']);
    }
}
