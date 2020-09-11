<?php

namespace App\Services\Admin;

use App\Models\ProductSku;
use App\Services\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductSkuService extends Service
{
    private $productSku;

    public function __construct(ProductSku $productSku)
    {
        $this->productSku = $productSku;
    }

    public function queryList($queries)
    {
        $requestData = page_limit($queries);
        return $this->productSku->latest()->paginate($requestData['page_limit']);
    }

    public function store($queries)
    {
        try {
            $productSkus = $this->productSku->create($queries);
        } catch (\Exception $e) {
            Log::error('添加商品SKU失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $productSkus;
    }

    public function edit($queries, $productSkuId)
    {
        try {
            $productSkus = $this->productSku->whereId($productSkuId)->update($queries);
        } catch (\Exception $e) {
            Log::error('编辑商品SKU失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $productSkus;
    }

    public function destory($productSkuId)
    {
        try {
            $productSkus = $this->productSku->whereId($productSkuId)->delete();
        } catch (\Exception $e) {
            Log::error('删除商品SKU失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $productSkus;
    }
}
