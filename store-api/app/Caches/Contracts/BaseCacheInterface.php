<?php


namespace App\Caches\Contracts;


interface BaseCacheInterface
{
    /**
     * 写入缓存
     * @param $params
     * @return mixed
     */
    public function create($params);

    /**
     * 更新缓存
     * @param $params
     * @return mixed
     */
    public function update($params);

    /**
     * 删除缓存
     * @param $params
     * @return mixed
     */
    public function delete($params);

}
