<?php
namespace App\Services\Api;

use App\Models\AssetImgs;
use App\Services\Service;

class AssetImgService extends Service
{
    private $assetImgs;
    public function __construct(AssetImgs $assetImgs)
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
