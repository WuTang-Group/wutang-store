<?php

namespace App\Services\Admin\Payment;

use App\Models\AlipayBankGateway;
use App\Services\Service;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;

class AlipayBankGatewayService extends Service
{
    private $alipayBankGateway;

    public function __construct(AlipayBankGateway $alipayBankGateway)
    {
        $this->alipayBankGateway = $alipayBankGateway;
    }

    public function index($param)
    {
        $requestData = page_limit($param);
        return $this->alipayBankGateway->paginate($requestData['page_limit']);
    }

    // 新增数据-可批量
    public function store($params)
    {
        $requestData = $params->all();
        Log::info($requestData);
        try {
            foreach ($requestData['items'] as $value) {
                if ($value['status'] == 1) {
                    // 若有1其他全部设为-1
                    $expresses = $this->alipayBankGateway->whereNotNull('id')->get();
                    foreach ($expresses as $express) {
                        $express->status = -1;
                        $express->save();
                    }
                }
                $value['return_url'] = URL::route('alipay.bank_gateway.alipayBankGatewayReturn',[],false);
                $value['notify_url'] = URL::route('alipay.bank_gateway.alipayBankGatewayNotify',[],false);
                Log::info($value);
                $result[] = $this->alipayBankGateway->create($value);
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
        Log::info($params);
        try {
            // 如果解密成功则未修改，删除此值，无需更新
            decrypt($params['key']);
            $params = Arr::except($params, ['key']);
        } catch(\Exception $e) {
            Log::error('解密失败，修改后的key未加密');
        }
        try {
            $express = $this->alipayBankGateway->find($id);
            $express->merch_id = $params['merch_id'];
            $express->product = $params['product'];
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
                // 由于update不会触发模型事件，此处使用save方式进行触发
                $expresses = $this->alipayBankGateway->whereNotNull('id')->get();
                foreach ($expresses as $express) {
                    $express->status = -1;
                    $express->save();
                }
            }
            $currentExpress = $this->alipayBankGateway->find($id);
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
            $this->alipayBankGateway->destroy($id);
            return true;
        } catch (\Exception $e) {
            Log::error('模型删除失败', ['message' => $e->getMessage()]);
            return false;
        }
    }
}
