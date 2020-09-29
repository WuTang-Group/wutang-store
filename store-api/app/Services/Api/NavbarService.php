<?php
namespace App\Services\Api;

use App\Models\ProductCategory;
use App\Services\Service;

class NavbarService extends Service
{
    private $productCategory;

    public function __construct(ProductCategory $productCategory)
    {
        $this->productCategory = $productCategory;
    }

    // 获取导航产品分类标题
    public function getProductCategoryTitleList()
    {
        return $this->productCategory->whereParentId(0)->with(['children' => function($query){
            $query->select('parent_id','name','slug');
        }])->get()->makeHidden(['thumbnail','banner','title','title_en','sub_title','describe','describe_en','describe_img','created_at','updated_at']);
    }
}
