<?php

namespace App\Enums\Payment;

use BenSampo\Enum\Enum;

/**
 * Class UnionPayCode
 * 以下为参数说明
 * ::::::::::::::::::::::
 * txnAmt 订单金额，单位为分
 * merId 商户号，接入微白条支付系统时分配
 * orderId 由商户系统生成，该订单号必需唯一，长度 8-24 位，由字母和数字组成
 * txnTime 商户发送交易时间，格式:YYYYMMDDhhmmss
 * backUrl 商户系统的地址，支付结束后，手机支付将通知该 url 通知商户交易结果
 * frontUrl 商户系统的地址，客户在网页上支付结束后，将跳转到该页面(post 方式)，商户读取参数 orderId 作为查询流水号 queryId，到“交易结果查询接口”查询 交易结果
 * accNo 支付卡号，若指定支付卡号，用户在支付界面将自动填上该卡号
 * cardNumberLock 锁定卡号，如果不允许用户修改支付卡号 accNo
 * signature 签名
 * queryId 系统流水号
 * :::::::::::::::::::️️:::
 * @package App\Enums
 */
final class UnionPayCode extends Enum
{
    const Success = '00'; // 成功
    const Faild = '01'; // 交易失败
    const NotOpen = '02'; // 系统未开放或暂时关闭
    const TimeOut = '03'; // 交易通讯超时
    const Busy = '06'; // 系统繁忙
}
