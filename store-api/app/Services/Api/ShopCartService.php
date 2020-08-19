<?php

namespace App\Services\Api;

use App\Enums\ShopCartItemType;
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
//            $this->user()->shopCartItems()->updateOrCreate(['product_id' => $queries['product_id']], [
//                'product_id' => $queries['product_id'],
//                'amount' => isset($queries['amount']) ? $queries['amount'] : 1
//            ]);
            $this->user()->shopCartItems()->create([
                'product_id' => $queries['product_id'],
                'amount' => 1 // 默认值也是1，可省略
            ]);
        } catch (\Exception $e) {
            Log::error('购物车操作失败', ['message' => $e->getMessage()]);
            return $e->getMessage();
        }
        return $this->queryList();
    }

    public function updateItemNumber($params)
    {
        try {
            switch ($params['type']) {
                case ShopCartItemType::AddItem:
                {
                    $result = $this->shopCart->whereUserId($this->user()->id)->whereProductId($params['product_id'])->increment('amount');
                }
                break;
                case ShopCartItemType::ReduceItem:
                {
                    $result = $this->shopCart->whereUserId($this->user()->id)->whereProductId($params['product_id'])->decrement('amount');
                }
                break;
                case ShopCartItemType::FixedItem:
                {
                    $result = $this->shopCart->whereUserId($this->user()->id)->whereProductId($params['product_id'])->update(['amount' => $params['amount']]);
                }
                break;
                default:
                {
                    return false;
                }
            }
        }catch (\Exception $e) {
            Log::error('购物车商品数量操作失败',['message'=>$e->getMessage()]);
            return false;
        }
        return $result;
    }

    public function delete($params)
    {
        try {
            $result = $this->shopCart->whereUserId($this->user()->id)->whereProductId($params)->delete();
        }catch (\Exception $e) {
            Log::error('购物车数据删除失败',['message'=>$e->getMessage()]);
            return false;
        }
        return $result;
    }
}
