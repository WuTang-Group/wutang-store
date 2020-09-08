<?php

namespace App\Services\Admin\Payment;

use App\Enums\CacheKeyPrefix;
use App\Models\AlipayLegacyExpress;
use App\Services\Service;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class AlipayLegacyExpressService extends Service
{
    private $alipayLegacyExpress;

    public function __construct(AlipayLegacyExpress $alipayLegacyExpress)
    {
        $this->alipayLegacyExpress = $alipayLegacyExpress;
    }

    // 获取数据列表
    public function index($params)
    {
        $requestData = page_limit($params->all());
        $key = CacheKeyPrefix::AlipayLegacyExpressAll;
        $result = Cache::get($key, function () {
            return $this->alipayLegacyExpress->get();
        });
        return $result->paginate($requestData['page_limit']);
    }

    // 新增数据-可批量
    public function store($params)
    {
        $requestData = $params->all();
        try {
            foreach ($requestData['items'] as $value) {
                if ($value['status'] == 1) {
                    $this->alipayLegacyExpress->update(['status' => -1]);  // 设置其他状态为-1
                }
                $value['return_url'] = route('alipay.legacy_express.alipayLegacyExpressReturn');
                $value['notify_url'] = route('alipay.legacy_express.alipayLegacyExpressNotify');
                $result[] = $this->alipayLegacyExpress->create($value);
            }
            return $result;
        } catch (\Exception $e) {
            Log::error('模型写入失败', ['message' => $e->getMessage()]);
            return false;
        }
    }

    // 编辑数据-过滤status值
    public function update($id, $params)
    {
        try {
            $express = $this->alipayLegacyExpress->find($id);
            $express->pid = $params->pid;
            $express->key = $params->key;
            $express->seller_email = $params->seller_email;
            $express->save();
            return $express;
        } catch (\Exception $e) {
            Log::error('模型更新失败', ['message' => $e->getMessage()]);
            return false;
        }
    }

    // 更新状态
    public function updateStatus($id, $params)
    {
        $status = $params->status;
        try {
            if ($status == 1) {
                //$this->alipayLegacyExpress->whereNotNull('id')->update(['status' => -1]);  // 设置其他状态为-1
                // 由于update不会触发模型事件，此处使用save方式进行触发
                $expresses = $this->alipayLegacyExpress->whereNotNull('id')->get();
                foreach ($expresses as $express) {
                    $express->status = -1;
                    $express->save();
                }
                // $this->alipayLegacyExpress->whereId($id)->update(['status' => 1]);  // 更改指定id为1
            }
            //return $this->alipayLegacyExpress->whereId($id)->update(['status' => $status]);  // 默认更改为传递状态
            $currentExpress = $this->alipayLegacyExpress->find($id);
            $currentExpress->status = $status;
            $currentExpress->save();
            return $currentExpress;
        } catch (\Exception $e) {
            Log::error('模型更新失败', ['message' => $e->getMessage()]);
            return false;
        }
    }

    // 删除数据
    public function delete($id)
    {
        try {
            $this->alipayLegacyExpress->destroy($id);
            return true;
        } catch (\Exception $e) {
            Log::error('模型删除失败', ['message' => $e->getMessage()]);
            return false;
        }
    }
}
