<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ShopCartRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\ShopCartItem;
use App\Services\Api\ShopCartService;
use Illuminate\ {
    Contracts\Foundation\Application,
    Contracts\Routing\ResponseFactory,
    Http\Response
};

/**
 * @group [API] Shop cart
 * 购物车管理
 * @authenticated
 * @package App\Http\Controllers\Api
 */
class ShopCartController extends Controller
{
    private $service;

    public function __construct(ShopCartService $service)
    {
        $this->service = $service;
    }

    /**
     * Get shop cart items
     * 请求购物车数据
     * @return Application|ResponseFactory|Response
     */
    public function queryList()
    {
        $results = $this->service->queryList();
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Request store cart items
     * 保存/更新购物车商品
     * @bodyParam product_list array required 商品列表
     * @bodyParam product_list.*.product_id integer required 商品id
     * @param ShopCartRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function store(ShopCartRequest $request)
    {
        $productList = $request->product_list;
        foreach ($productList as $value) {
            if (!$product = Product::find($value['product_id'])) {
                return response(ResponseData::productNotExist($value['product_id']));
            }
            if ($product->stock === 0) {
                return response(ResponseData::productSoldOut($value['product_id']));
            }
            if (ShopCartItem::whereUserId($this->user()->id)->whereProductId($value['product_id'])->first()) {
                return response(ResponseData::productShopCartExist($value['product_id']));
            }
            // 判断用户是否买过该商品
            $orderItem = Order::whereHas('items', function ($query) use ($value) {
                $query->whereProductId($value['product_id']);
            })->with('items')->whereUserId($this->user()->id)->paid()->get();
            if (!$orderItem->isEmpty()) {
                return response(ResponseData::productBought($value['product_id']));
            }
        }
        $results = $this->service->store($request);
        return $results ? response(ResponseData::requestSuccess($results)) : response(ResponseData::requestFails($request->all()));
    }

    /**
     * According type to change cart item(NOT USE)
     * 根据type改变购物车商品数量(暂未启用)
     * @queryParam type required 操作类型,可传参数为:add(点击'+'时)/reduce(点击'—'时)/fixed(需传固定数量时)
     * @queryParam product_id rquired 商品ID
     * @queryParam amount optional 可选的商品数量(type为fixed时需传该参数)
     * @param $type
     * @param ShopCartRequest $request
     */
    public function updateItemNumber($type,ShopCartRequest $request)
    {
        $requestData = [
            'type' => $type,
            'product_id' => $request->product_id,
            'amount' => $request->amount
        ];
        $results = $this->service->updateItemNumber($requestData);
    }

    /**
     * Request delete the cart items
     * 删除购物车商品
     * @queryParam product_id required 商品id
     * @param $product_id
     * @return Application|ResponseFactory|Response
     */
    public function delete($product_id)
    {
        $results = $this->service->delete($product_id);
        return $results ? response(ResponseData::requestSuccess($results)) : response(ResponseData::requestFails($product_id));
    }

}
