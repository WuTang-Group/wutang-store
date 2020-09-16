<?php

namespace App\Services\Payment;

use App\Enums\PaymentType;
use App\Models\AlipayLegacyExpress;
use App\Models\Payment;
use App\Services\Service;
use Illuminate\Support\Facades\Log;

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
                            'request_url' => route('alipay.bank_gateway.payByAlipayBankGateway')
                        ]);
                    }
                    break;
                case PaymentType::AlipayLegacyExpress:
                    {
                        $payment = $this->payment->firstOrCreate(['type' => $paymentType], [
                            'type' => $paymentType,
                            'request_url' => route('alipay.legacy_express.payByAlipayLegacyExpress')
                        ]);
                        (new AlipayLegacyExpress())->payment()->associate($payment);
                    }
                    break;
                case PaymentType::AlipayAopPage:
                    {
                        $payment = $this->payment->firstOrCreate(['type' => $paymentType], [
                            'type' => $paymentType,
                            'request_url' => route('alipay.aop_page.payByAlipayAopPage')
                        ]);
                    }
                    break;
                case PaymentType::Unionpay:
                    {
                        $payment = $this->payment->firstOrCreate(['type' => $paymentType], [
                            'type' => $paymentType,
                            'request_url' => route('unionpay.payByUnionpay')
                        ]);
                    }
                    break;
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
            $payment = $this->payment->whereType($paymentType)->first();
            // 传递数据时，若对应type下的数据有值
            if (!is_null($payment)) {
                if ($params->status == -1) {
                    $this->destroy($paymentType);
                }
            }
            return true;
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
