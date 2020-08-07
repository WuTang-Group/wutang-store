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

    public function queryList($queries){
        try{
            return $this->productSku->paginate($queries['page_limit']);
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return false;
        }
    }

    public function store($queries){
        Log::info($queries);
        try{
            return $this->productSku->create($queries);
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return false;
        }
    }

    public function edit($queries, $productSkuId){
        try{
            $this->productSku->where('id', $productSkuId)->update($queries);
            return true;
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return false;
        }
    }

    public function destory($productSkuId){
        try{
            $this->productSku->where('id', $productSkuId)->delete();
            return true;
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return false;
        }
    }
}
