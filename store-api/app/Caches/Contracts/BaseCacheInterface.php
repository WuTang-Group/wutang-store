<?php


namespace App\Caches\Contracts;


/**
 * Interface BaseCacheInterface
 * 基础缓存接口
 * @package App\Caches\Contracts
 */
interface BaseCacheInterface
{
    /**
     * 写入缓存
     * @param $params
     * @return mixed
     */
    public function save($params);

    /**
     * 删除缓存
     * @param $params
     * @return mixed
     */
    public function delete($params);

}
