<?php
namespace App\Services\Admin;

use App\Services\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LoggerService extends Service
{
    public const CONNECTION = 'mongodb';  // 连接名

    // 日志列表
    public function systemLogList($collection,$params)
    {
        $requestData = page_limit($params->all());
        $model = DB::connection(static::CONNECTION)->collection($collection);
        return $model->latest('datetime')->paginate($requestData['page_limit']);
    }

    // 删除日志
    public function systemLogDestroy($collection,$params)
    {
        $requestData = $params->all();
        try {
            $model = DB::connection(static::CONNECTION)->collection($collection);
            $res = $model->whereIn('_id',$requestData['ids'])->delete();
        }catch (\Exception $e){
            Log::error('日志删除失败',['message'=>$e->getMessage()]);
            return false;
        }
        return $res;
    }
}
