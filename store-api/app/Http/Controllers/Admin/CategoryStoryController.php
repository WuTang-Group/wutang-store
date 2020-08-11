<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryStoryRequest;
use App\Services\Admin\CategoryStoryService;
use Illuminate\Http\Request;


class CategoryStoryController extends Controller
{
    private $categoryStoriesService;
    public function __construct(CategoryStoryService $categoryStoriesService)
    {
        $this->categoryStoriesService = $categoryStoriesService;
    }

    /**
     * 「ADMIN」Get product category stoies
     * 获取产品分类故事
     * @queryParam page 页码
     * @queryParam page_limit 没页数量
     * @param Request $request
     *@return \Illuminate\Http\JsonResponse
     */
    public function queryList(Request $request)
    {
        $result = $this->categoryStoriesService->queryList($request);
        return response()->json(ResponseData::requestSuccess($result));

    }

    /**
     *「ADMIN」Create product category story
     * 添加产品分类故事
     * @queryParam title required 分类故事名称
     * @queryParam title_en 英文故事名称
     * @queryParam description 分类简介
     * @queryParam description_en 英文分类简介
     * @queryParam banner 故事banner
     * @queryParam product_category_id 属于产品类ID
     * @param CategoryStoryRequest $categoryStoriesRequest
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function store(CategoryStoryRequest $categoryStoriesRequest)
    {
        $queries = $categoryStoriesRequest->only(['title', 'title_en', 'description', 'description_en', 'banner', 'product_category_id']);
        $result = $this->categoryStoriesService->store(array_filter($queries));

        return $result ? response()->json(ResponseData::requestSuccess($result)) : ResponseData::requestFails();

    }

    /**
     *「ADMIN」edit product category story
     * 编辑产品分类故事
     * @queryParam title 分类故事名称
     * @queryParam title_en 英文故事名称
     * @queryParam description 分类简介
     * @queryParam description_en 英文分类简介
     * @queryParam banner 故事banner
     * @queryParam product_category_id 属于产品类ID
     * @param $categoriesStoriesId
     * @param CategoryStoryRequest $categoryStoriesRequest
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function edit($categoriesStoriesId, CategoryStoryRequest $categoryStoriesRequest)
    {
        $queries = $categoryStoriesRequest->only(['title', 'title_en', 'description', 'description_en', 'banner', 'product_category_id']);
        $result = $this->categoryStoriesService->edit(array_filter($queries), $categoriesStoriesId);

        return $result ? response()->json(ResponseData::requestSuccess()) : ResponseData::requestFails($queries);
    }

    /**
     *「ADMIN」Delete product category story
     * 删除产品分类故事
     * @param $categoriesStoriesId
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function destroy($categoriesStoriesId)
    {
        $result = $this->categoryStoriesService->destroy($categoriesStoriesId);
        return $result ? response()->json(ResponseData::requestSuccess($result)) : ResponseData::requestFails();
    }


}
