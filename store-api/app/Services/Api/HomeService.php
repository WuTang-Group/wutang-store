<?php

namespace App\Services\Api;

use App\Enums\AssetImgLocation;
use App\Enums\AssetImgType;
use App\Models\AssetImg;
use App\Models\TheHouse;
use App\Services\Service;

class HomeService extends Service
{
    private $assetImg, $theHouse;

    public function __construct(AssetImg $assetImg, TheHouse $theHouse)
    {
        $this->assetImg = $assetImg;
        $this->theHouse = $theHouse;
    }

    // 获取首页数据信息
    public function getList()
    {
        return [
            'banner' => $this->getBanner(),
            'discover' => $this->getDiscoverList(),
            'recommend_list' => $this->getRecommendListForThisMonth(),
            'the_house' => $this->getTheHouseList()
        ];
    }

    // 获取首页banner数据
    public function getBanner()
    {
        try {
            return $this->assetImg->whereType(AssetImgType::Banner)->whereImgLocation(AssetImgLocation::Index)
                ->with(['product' => function ($query) {
                    $query->select('id', 'slug', 'product_name', 'product_name_en');
                }])->firstOrFail()->makeHidden(['created_at', 'updated_at']);
        } catch (\Exception $e) {
            return '';
        }
    }

    // 获取首页当月推荐数据
    public function getRecommendListForThisMonth()
    {
        try {
            return $this->assetImg->whereType(AssetImgType::ThisMonthRecommannd)->whereImgLocation(AssetImgLocation::Index)
                ->with(['product' => function ($query) {
                    $query->select('id', 'slug', 'product_name', 'product_name_en');
                }])->firstOrFail()->makeHidden(['created_at', 'updated_at']);
        } catch (\Exception $e) {
            return [];
        }
    }

    // 获取首页discover列表数据
    public function getDiscoverList()
    {
        return $this->assetImg->whereType(AssetImgType::Discover)->whereImgLocation(AssetImgLocation::Index)
            ->with(['product' => function ($query) {
                $query->select('id', 'slug', 'product_name', 'product_name_en');
            }])->get()->makeHidden(['created_at', 'updated_at']);
    }

    // 获取the house 列表数据
    public function getTheHouseList()
    {
        return $this->theHouse->inRandomOrder()->take(3)->get()->makeHidden(['created_at', 'updated_at']);
    }

}
