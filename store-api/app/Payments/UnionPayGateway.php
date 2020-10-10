<?php


namespace App\Payments;


use GuzzleHttp\Client;

/**
 * Class UnionPayGateway
 * 第三方银联支付
 * @package App\Payments
 */
class UnionPayGateway
{
    /**
     * 生成签名
     * @param array $parameters
     * @param string $key
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
     * @param array $parameters
     * @param string $key
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
     * @param string $url
     * @param array $data
     * @param int $time_out
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
