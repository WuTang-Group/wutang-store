<?php


namespace App\Payments;


use GuzzleHttp\Client;

class AlipayBankGateway
{
    /**
     * 将参数签名
     * @param array $args 数组参数
     * @return string
     */
    public static function sign($args = [])
    {
        ksort($args);
        $mab = '';
        foreach ($args as $k => $v) {
            if ($k == 'sign' || $k == 'key' || $v == '') {
                continue;
            }
            $mab .= $k . '=' . $v . '&';
        }
        $mab .= 'key=' . $args['key'];
        return md5($mab);
    }

    /**
     * 校验签名
     * @param string $key 商户密钥
     * @param array $args 接口返回的数组参数
     * @return bool
     */
    public static function verify($key, $args = [])
    {
        ksort($args);
        $mab = '';
        foreach ($args as $k => $v) {
            if ($k == 'sign' || $v == '') {
                continue;
            }
            $mab .= $k . '=' . $v . '&';
        }
        $mab .= 'key=' . $key;
        if (md5($mab) == $args['sign']) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 发送交易请求
     * @param string $url 请求接口
     * @param array $post_data 发送的数据
     * @param int $time_out 过期时间
     * @return bool|string
     */
    public static function post($url, $post_data, $time_out = 10)
    {

//        $curl = curl_init();
//        curl_setopt($curl, CURLOPT_URL, $url);
//        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
//        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//
//        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
//        curl_setopt($curl, CURLOPT_TIMEOUT, $time_out);
//        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
//        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
//
//        $data = curl_exec($curl);
//        $errno = curl_errno($curl);
//        $msg = curl_error($curl);
//        $info = curl_getinfo($curl);
//        if ($errno) {
//            //print_r('errno:'.$errno);print_r('<br />');
//        }
//        if ($msg) {
//            //print_r('msg:'.$msg);print_r('<br />');
//        }
//        if ($info) {
//            //print_r('info:');
//            //print_r($info);
//        }
//        curl_close($curl);
//
//        return $data;
        $client = new Client;
        try {
            //$results = $client->post($url, ['form_params' => $post_data, 'timeout' => $time_out, 'verify' => false,]);
            $results = $client->post($url, ['form_params' => $post_data, 'timeout' => $time_out]);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return $e->getMessage();
        }
            return json_decode($results->getBody(),true);
    }
}
