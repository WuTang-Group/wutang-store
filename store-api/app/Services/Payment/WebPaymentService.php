<?php

namespace App\Services\Payment;

use App\Enums\Payment\PaymentType;
use App\Models\AlipayBankGateway;
use App\Models\AlipayLegacyExpress;
use App\Models\Payment;
use App\Models\UnionPayGateway;
use App\Services\Service;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;

class WebPaymentService extends Service
{
    private $payment;

    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    // 状态为1的支付列表
    public function getList()
    {
        return $this->payment->whereStatus(1)->get();
    }

    // 存储payment数据
    public function store(string $paymentType)
    {
        try {
            switch ($paymentType) {
                case PaymentType::AlipayBankGateway:
                    {
                        $payment = $this->payment->firstOrCreate(['type' => $paymentType], [
                            'type' => $paymentType,
                            'request_url' => URL::route('alipay.bank_gateway.payByAlipayBankGateway',[],false)  // 存入URI(除去域名)
                        ]);
                        $alipayBankGateway = AlipayBankGateway::firstWhere('status', 1);
                        $alipayBankGateway->payment()->associate($payment);
                        $alipayBankGateway->save();
                    }
                    break;
                case PaymentType::AlipayLegacyExpress:
                    {
                        $payment = $this->payment->firstOrCreate(['type' => $paymentType], [
                            'type' => $paymentType,
                            'request_url' => URL::route('alipay.legacy_express.payByAlipayLegacyExpress',[],false)
                        ]);
                        $alipayLegacyExpress = AlipayLegacyExpress::firstWhere('status', 1);
                        $alipayLegacyExpress->payment()->associate($payment);
                        $alipayLegacyExpress->save();
                    }
                    break;
                case PaymentType::AlipayAopPage:
                    {
                        $payment = $this->payment->firstOrCreate(['type' => $paymentType], [
                            'type' => $paymentType,
                            'request_url' => URL::route('alipay.aop_page.payByAlipayAopPage',[],false)
                        ]);
                    }
                    break;
                case PaymentType::Unionpay:
                    {
                        $payment = $this->payment->firstOrCreate(['type' => $paymentType], [
                            'type' => $paymentType,
                            'request_url' => URL::route('unionpay.payByUnionpay',[],false)
                        ]);
                    }
                    break;
                case PaymentType::UnionPayGateway:
                {
                    $payment = $this->payment->firstOrCreate(['type' => $paymentType],[
                        'type' => $paymentType,
                        'request_url' => URL::route('unionpay_gateway.pay.payByUnionPayGateway',[],false)
                    ]);
                    $unionPayGateway = UnionPayGateway::firstWhere('status', 1);
                    $unionPayGateway->payment()->associate($payment);
                    $unionPayGateway->save();
                }
            }
            return $payment;
        } catch (\Exception $e) {
            Log::error('支付管理-添加失败', [
                'msg' => $e->getMessage()
            ]);
            return false;
        }
    }

    // 更新payment数据
    public function update(object $params, string $paymentType)
    {
        try {
            switch ($paymentType) {
                case PaymentType::AlipayLegacyExpress:
                    {
                        $model = AlipayLegacyExpress::find($params->id);
                        // 如果是-1
                        if ($params->status == -1) {
                            // 移除关联
                            $model->payment_id = NULL;
                            $model->save();
                            $this->destroy($paymentType);
                        }
                        // 如果是1
                        if($params->status == 1) {
                            $this->store($paymentType);
                        }
                    }
                    break;
            }
            return $model;
        } catch (\Exception $e) {
            Log::error('支付管理-更新失败', [
                'msg' => $e->getMessage()
            ]);
            return false;
        }
    }

    // 删除payment数据
    public function destroy(string $paymentType)
    {
        try {
            $payment = $this->payment->whereType($paymentType)->first();
            if (!is_null($payment)) {
                $payment->delete();
            }
            return $payment;
        } catch (\Exception $e) {
            Log::error('支付管理-删除失败', [
                'msg' => $e->getMessage()
            ]);
            return false;
        }
    }

}
