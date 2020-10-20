<?php

namespace App\Services\Api;

use App\Enums\ShopCartItemType;
use App\Models\Product;
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
//        return User::with(['shopCartItems.product' =>function($query){
//            $query->select('id');
//        }])->whereId($this->user()->id)->get()->makeHidden([
//            'department_id','member_code_id','password_question_id','email','email_verified_at','password_answer','phone','avatar',
//            'status','created_at','updated_at'
//            ]);

        $shopCartItems = $this->user()->shopCartItems;
        return $shopCartItems->map(function ($item, $key){
            $product = Product::whereId($item['product_id'])->get(['product_name','product_name_en','thumbnail','slug','price','sale_price']);
            $item['product'] = $product;
            return $item;
        });
    }

    public function store($queries)
    {
        try {
            $items = $queries->product_list;
            foreach ( $items as $value) {
                $this->user()->shopCartItems()->create([
                    'product_id' => $value['product_id'],
                    'amount' => 1 // 默认值也是1，可省略
                ]);
            }
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
