<?php

namespace App\Services\Admin\Payment;

use App\Enums\CacheKeyPrefix;
use App\Models\AlipayLegacyExpress;
use App\Services\Service;
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
        $key = CacheKeyPrefix::AlipayLegacyExpress . 'ALL';
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

    // 编辑数据
    public function update($id, $params)
    {
        $requestData = $params->all();
        try {
            return $this->alipayLegacyExpress->whereId($id)->update($requestData);
        } catch (\Exception $e) {
            Log::error('模型更新失败', ['message' => $e->getMessage()]);
            return false;
        }
    }

    // 删除数据
    public function delete($id)
    {
        try {
            return $this->alipayLegacyExpress->destroy($id);
        } catch (\Exception $e) {
            Log::error('模型删除失败', ['message' => $e->getMessage()]);
            return false;
        }
    }
}
