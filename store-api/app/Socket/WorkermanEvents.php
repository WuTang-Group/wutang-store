<?php


namespace App\Socket;


use GatewayWorker\Lib\Gateway;
use Illuminate\Support\Facades\Log;

class WorkermanEvents
{
    /**
     * 当businessWorker进程启动时触发。每个进程生命周期内都只会触发一次
     * @param $businessWorker
     */
    public static function onWorkerStart($businessWorker)
    {
        //echo "BusinessWorker Start\n";
    }

    /**
     * 当客户端连接时触发
     * 如果业务不需此回调可以删除onConnect
     * @param int $client_id 连接id
     * @throws \Exception
     */
    public static function onConnect($client_id)
    {
        // 向当前client_id发送数据
        //Gateway::sendToClient($client_id, "Hello $client_id");
        // 向所有人发送
        Gateway::sendToAll(json_encode([
            'client_id' =>$client_id,
            'msg' => '欢迎连入'
        ]));
    }

    /**
     * 当客户端连接上gateway完成websocket握手时触发的回调函数。
     * 注意：此回调只有gateway为websocket协议并且gateway没有设置onWebSocketConnect时才有效。
     * @param $client_id
     * @param $data
     */
    public static function onWebSocketConnect($client_id, $data)
    {

    }

    /**
     * 当客户端发来消息时触发
     * @param int $client_id 连接id
     * @param string $message 具体消息
     * @throws \Exception
     */
    public static function onMessage($client_id, $message)
    {
        // 针对特殊客户端发送
        //Gateway::sendToClient($client_id, json_encode($response));

        // 对所有客户端发送
        Gateway::sendToAll(json_encode([
            'client_id' => $client_id,
            'said_msg' =>json_decode($message)
        ]));
    }

    /**
     * 当用户断开连接时触发
     * @param int $client_id 连接id
     */
    public static function onClose($client_id)
    {
        //Gateway::sendToAll($client_id."logout");
        Log::info('close connection' . $client_id);
    }
}
