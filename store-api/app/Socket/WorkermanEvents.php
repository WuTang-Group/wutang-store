<?php


namespace App\Socket;


use App\Enums\CacheKeyPrefix;
use App\Enums\SocketMode;
use App\Services\Api\OrderService;
use GatewayWorker\Lib\Gateway;
use Illuminate\Support\Facades\Session;

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
     * @param string $client_id 连接id
     * @throws \Exception
     */
    public static function onConnect($client_id)
    {
        // 向当前client_id发送连接通知
        Gateway::sendToClient($client_id, json_encode([
            'mode' => SocketMode::ServerCommonMessage,
            'data' => [
                'cliend_id' => $client_id,
                'msg' => '欢迎连入'
            ]
        ]));
        // 用户登录后连接绑定uid
        if (auth('api')->check()) {
            $uid = auth('api')->user()->id;
            Gateway::bindUid($client_id, $uid);
            $session_key = CacheKeyPrefix::UserCache . $uid;
            // 存储到session
            Session::put($session_key, [
                'uid' => $uid,
            ]);
        }

        // 向所有人发送
//        Gateway::sendToAll(json_encode([
//            'mode' => SocketMode::ServerCommonMessage,
//            'data' => [
//                'cliend_id' => $client_id,
//                'msg' => '欢迎连入'
//            ]
//        ]));
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
     * @param string $client_id 连接id
     * @param string $message 具体消息
     * @throws \Exception
     */
    public static function onMessage($client_id, $message)
    {
        // 针对特殊客户端发送
//        Gateway::sendToClient($client_id, json_encode([
//            'mode' => SocketMode::ServerCommonMessage,
//            'data' => [
//                'cliend_id' => $client_id,
//                'msg' => $message
//            ]
//        ]));
        $client_data = json_decode($message, true);
        // 客户端的心跳检测(若传递则表示正常)
        if ($client_data['mode'] == SocketMode::ClientHeartCheck) {
            // 回传心跳
            Gateway::sendToClient($client_id, json_encode([
                'mode' => SocketMode::ServerHeartCheck,
                'data' => 'heart check'
            ]));
        }
        // 客户端传送的消息
        if($client_data['mode'] == SocketMode::ClientOrderNotify) {
            // 替换session内的值
            if (auth('api')->check()) {
                $uid = auth('api')->user()->id;
                $session_key = CacheKeyPrefix::UserCache . $uid;
                // 存储到session
                Session::put($session_key, [
                    'uid' => $uid,
                    'no' => $client_data['data']['no']
                ]);
            }
        }
    }

    /**
     * 当用户断开连接时触发
     * @param string $client_id 连接id
     */
    public static function onClose($client_id)
    {
        //Gateway::sendToAll($client_id."logout");
        if (auth('api')->check()) {
            $uid = auth('api')->user()->id;
            $session_key = CacheKeyPrefix::UserCache . $uid;
            $session_data = Session::get($session_key);
            // 用户断开连接自动取消订单
            app(OrderService::class)->requestCancel($session_data);
        }
    }
}
