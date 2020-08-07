<?php
namespace App\Services\Admin;

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

    public function queryList($queries, $user_id)
    {
//        $shopCartArray = array();
//        $shopCarts =  $this->shopCart->where('user_id', $user_id)->get();
//        foreach ($shopCarts as $value){
//            $shopCart['product_name'] = $value->product->product_name;
//            $shopCart['product_name_en'] = $value['product_name_en'];
//            $shopCart['thumbnail'] = $value['thumbnail'];
//            $shopCart['price'] = $value['price'];
//            $shopCart['sale_price'] = $value['sale_price'];
//            $shopCart['stock'] = $value['stock'];
//        }
        // return $this->shopCart->with('product')->whereUserId($user_id)->get();
        Log::info($this->user()->id);
        return User::whereId($this->user()->id)->with('shopCart','shopCart.product')->get();
    }


    public function store($queries){
        $queries['user_id'] = $this->user()->id;
        try{
            return $this->shopCart->create($queries);
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return false;
        }
    }
}
