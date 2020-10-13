<?php


namespace App\Payments;


use GuzzleHttp\Client;

/**
 * Class UnionPayGatewayCache
 * 第三方银联支付
 * @package App\Payments
 */
class UnionPayGateway
{
    /**
     * 生成签名
     * @param array $parameters 参数数组
     * @param string $key 支付密钥
     * @return string
     */
    public static function sign($parameters, $key)
    {
        $signParams = "";
        ksort($parameters);
        foreach ($parameters as $k => $v) {
            if ("sign" != $k) {
                $signParams .= $k . "=" . $v . "&";
            }
        }
        $signParams .= "key=" . $key;
        return strtoupper(md5($signParams));
    }

    /**
     * 验签
     * @param array $parameters 参数数组
     * @param string $key 支付密钥
     * @return bool
     */
    public static function verify($parameters, $key)
    {
        $signParams = "";
        ksort($parameters);
        foreach ($parameters as $k => $v) {
            if ("sign" != $k) {
                $signParams .= $k . "=" . $v . "&";
            }
        }
        $signParams .= "key=" . $key;
        if (strtoupper(md5($signParams)) == $parameters['sign']) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 发送支付请求
     * @param string $url 请求地址
     * @param array $data 请求参数
     * @param int $time_out 超时时间
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public static function get($url, $data, $time_out = 10)
    {
        $client = new Client();
        try {
            $results = $client->get($url, ['query' => $data, 'timeout' => $time_out]);
            return $results->getBody();
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return $e->getMessage();
        }
    }
}
