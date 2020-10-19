<?php


namespace App\Caches\Contracts;


/**
 * Interface BaseModelCacheInterface
 * 模型缓存接口
 * @package App\Caches\Contracts
 */
interface BaseModelCacheInterface
{
    /**
     * 写入缓存
     * @param object $model 模型对象
     * @return mixed
     */
    public function save($model);

    /**
     * 删除缓存
     * @return mixed
     */
    public function delete();
}
