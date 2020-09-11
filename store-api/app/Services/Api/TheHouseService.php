<?php
namespace App\Services\Api;

use App\Models\TheHouse;
use App\Models\TheHouseCategory;
use App\Services\Service;

class TheHouseService extends Service
{
    private $theHouse, $theHouseCategory;
    public function __construct(TheHouse $theHouse, TheHouseCategory $theHouseCategory)
    {
        $this->theHouse = $theHouse;
        $this->theHouseCategory = $theHouseCategory;
    }

    public function theHouseCategoryList()
    {
        return $this->theHouseCategory->latest()->all();
    }

    public function theHouseAll($param)
    {
        return $this->theHouse->with(['theHouseCategory'=> function($query) {
            return $query->select('id', 'name', 'slug');
        }])->latest()->paginate($param['page_limit']);
    }


    public function theHouseList($category_slug)
    {
        return $this->theHouseCategory->with('theHouses')->whereSlug($category_slug)->latest()->first();
    }

    public function theHouseDetail($the_house_slug)
    {
        return $this->theHouse->with('theHouseContents')->whereSlug($the_house_slug)->get();
    }
}
