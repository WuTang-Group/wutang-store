<?php

namespace App\Services\Api;

use App\Enums\AssetImgLocation;
use App\Enums\AssetImgType;
use App\Models\AssetImg;
use App\Models\TheHouse;
use App\Models\TheHouseCategory;
use App\Services\Service;
use Illuminate\Support\Arr;

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
                    $query->select('id', 'slug', 'product_name', 'product_name_en', 'product_video','level');
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
                    $query->select('id', 'slug', 'product_name', 'product_name_en','level');
                }])->get()->makeHidden(['created_at', 'updated_at']);
        } catch (\Exception $e) {
            return [];
        }
    }

    // 获取首页discover列表数据
    public function getDiscoverList()
    {
        return $this->assetImg->whereType(AssetImgType::Discover)->whereImgLocation(AssetImgLocation::Index)
            ->with(['product' => function ($query) {
                $query->select('id', 'slug', 'product_name', 'product_name_en','level');
            }])->get()->makeHidden(['created_at', 'updated_at']);
    }

    // 获取the house 列表数据
    public function getTheHouseList()
    {
        //        return $this->theHouse->with(['theHouseCategory'])->inRandomOrder()->take(3)->get()->makeHidden(['created_at', 'updated_at']);
        $query = TheHouseCategory::with(['theHouses'])->get()->toArray();
        foreach ($query as $key=>$value) {
            $query[$key]['the_houses'] = Arr::random($value['the_houses']);
        }
        return $query;
    }

}
