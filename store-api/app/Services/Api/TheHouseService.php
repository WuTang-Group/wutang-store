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

    // 获取the house分类列表
    public function getCategoryList()
    {
        return $this->theHouseCategory->get();
    }

    // 根据分类slug获取the house列表
    public function getListByCategorySlug(string $categorySlug)
    {
        return $this->theHouseCategory->whereSlug($categorySlug)->with(['theHouses'])->first();
    }

    // 根据the house slug获取the house详情
    public function getDetailByTheHouseSlug(string $theHouseSlug)
    {
        return $this->theHouse->whereSlug($theHouseSlug)->with(['theHouseContents'])->first();
    }

    // 获取the house其他报道随机3条列表
    public function getOtherCategoryList(string $categorySlug, int $length = 3)
    {
        $the_house_category = $this->theHouseCategory->whereSlug($categorySlug)->with(['theHouses'])->first()->theHouses;
        if (count($the_house_category) >= $length) {
            return $the_house_category->random($length);
        }
        return $the_house_category->random(count($the_house_category));
    }

}
