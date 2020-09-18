<?php
namespace App\Services\Api;

use App\Models\AssetImg;
use App\Services\Service;

class AssetImgService extends Service
{
    private $assetImgs;
    public function __construct(AssetImg $assetImgs)
    {
        $this->assetImgs = $assetImgs;
    }

    public function list($query)
    {
        return $this->assetImgs->paginate($query['page_limit']);
    }


    public function getImg($img_location)
    {
        return $this->assetImgs->where('img_location', $img_location)->get();
    }
}
