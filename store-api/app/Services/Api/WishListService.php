<?php
namespace App\Services\Api;

use App\Services\Service;

class WishListService extends Service
{
    // 心愿单列表
    public function index(object $params)
    {
        $requestData = page_limit($params->all());
        return $this->user()->wishLists()->paginate($requestData['page_limit']);
    }

    // 加入心愿单
    public function store(object $params)
    {
        $user = $this->user();
        //attach将用户与商品关联
        // 判断用户若与商品并没关联则进行关联
        if ($user->wishLists()->find($params->product_id)) {
            return [];
        }

        $user->wishLists()->attach($params->product_id);

        return [];
    }

    // 移出心愿单
    public function delete($productId,$params)
    {
        $user = $params->user();
        return $user->wishLists()->detach($productId);  // detach取消多对多关联
    }
}
