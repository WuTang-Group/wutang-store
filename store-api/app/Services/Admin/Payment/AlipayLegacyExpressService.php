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
        $requestData = $params->except(['status']);
        try {
            return $this->alipayLegacyExpress->whereId($id)->update($requestData);
        } catch (\Exception $e) {
            Log::error('模型更新失败', ['message' => $e->getMessage()]);
            return false;
        }
    }

    // 更新状态
    public function updateStatus($id, $params)
    {
        $status = $params->only(['status']);
        try {
            if ($status == 1) {
                $this->alipayLegacyExpress->update(['status' => -1]);  // 设置其他状态为-1
                $this->alipayLegacyExpress->whereId($id)->update(['status' => 1]);  // 更改指定id为1
            }
            $this->alipayLegacyExpress->whereId($id)->update(['status' => $status]);  // 默认更改为传递状态
            return true;
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
