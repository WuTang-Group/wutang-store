<?php

namespace App\Services\Admin\Payment;

use App\Enums\CacheKeyPrefix;
use App\Models\AlipayLegacyExpress;
use App\Services\Service;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;

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
//        $key = CacheKeyPrefix::AlipayLegacyExpressAll;
//        $result = Cache::get($key, function () {
//            return $this->alipayLegacyExpress->get();
//        });
//        return $result->paginate($requestData['page_limit']);
        return $this->alipayLegacyExpress->paginate($requestData['page_limit']);
    }

    // 新增数据-可批量
    public function store($params)
    {
        $requestData = $params->all();
        try {
            foreach ($requestData['items'] as $value) {
                if ($value['status'] == 1) {
                    // 若有1其他全部设为-1
                    $expresses = $this->alipayLegacyExpress->whereNotNull('id')->get();
                    foreach ($expresses as $express) {
                        $express->status = -1;
                        $express->save();
                    }
                }
                $value['return_url'] = URL::route('alipay.legacy_express.alipayLegacyExpressReturn',[],false);
                $value['notify_url'] = URL::route('alipay.legacy_express.alipayLegacyExpressNotify',[],false);
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
        // 判断key是否被修改
        try {
            // 如果解密成功则未修改，删除此值，无需更新
            decrypt($params['key']);
            $params = Arr::except($params, ['key']);
        } catch(\Exception $e) {
            Log::error('解密失败，修改后的key未加密');
        }
        try {
            $express = $this->alipayLegacyExpress->find($id);
            $express->pid = $params['pid'];
            $express->seller_email = $params['seller_email'];
            if (Arr::exists($params, 'key')) {
                $express->key = $params['key'];
            }
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
