<?php

namespace App\Services\Api;

use App\Models\ShopCartItem;
use App\Models\User;
use App\Services\Service;
use Illuminate\Support\Facades\Log;

class ShopCartService extends Service
{
    private $shopCart;

    public function __construct(ShopCartItem $shopCart)
    {
        $this->shopCart = $shopCart;
    }

    public function queryList()
    {
        return User::with(['shopCartItems', 'shopCartItems.product'])->whereId($this->user()->id)->get();
    }

    public function store($queries)
    {
        try {
            $this->user()->shopCartItems()->updateOrCreate(['product_id' => $queries['product_id']], [
                'product_id' => $queries['product_id'],
                'amount' => $queries['amount']
            ]);
        } catch (\Exception $e) {
            Log::error('购物车操作失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $this->queryList();
    }

    public function delete($params)
    {
        try {
            $result = $this->shopCart->whereProductId($params)->delete();
        }catch (\Exception $e) {
            Log::error('购物车数据删除失败',['message'=>$e->getMessage()]);
            return false;
        }
        return $result;
    }
}
