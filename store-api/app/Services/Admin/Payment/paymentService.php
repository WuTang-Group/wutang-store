<?php
namespace App\Services\Admin\Payment;

use App\Enums\AliyunOssDir;
use App\Handlers\OssHandler;
use App\Models\Payment;
use App\Services\Service;
use Illuminate\Support\Facades\Log;

class paymentService extends Service
{
    protected $payment;
    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    public function getPayments($params)
    {
        $requestData = page_limit($params);
        return $this->payment->latest()->paginate($requestData['page_limit']);
    }

    public function paymentImgStoreById($id, $params)
    {
        $requestData = saveOss($params, ['img'],AliyunOssDir::Payments);
        try{
            $payment = $this->payment->find($id);
            OssHandler::delete($payment->img);
            $payment->update($requestData['params']);
        } catch(\Exception $e) {
            Log::error('保存支付Logo失败',['message' => $e->getMessage()]);
            return false;
        }
        return true;
    }
}
