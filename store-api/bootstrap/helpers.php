<?php
/**
 * 自定义助手函数库
 */

/**
 * 分页助手
 * @param null $queries
 * @return array
 */
function page_limit($queries = null)
{
    $requestData = $queries;
    // 对请求参数默认分页参数进行过滤赋值
    $requestData['page'] = isset($queries['page']) ? (integer)$queries['page'] : 1;
    $requestData['page_limit'] = isset($queries['page_limit']) ? (integer)$queries['page_limit'] : 20;
    return $requestData;
}

/**
 * php7.2开始废弃了each()函数，这里自己封装一个助手函数
 * @param $array array 传递的数组
 * @return array|bool 返回拼接数据
 */
function custom_each(&$array)
{
    $res = array();
    $key = key($array);
    if ($key !== null) {
        next($array);
        $res[1] = $res['value'] = $array[$key];
        $res[0] = $res['key'] = $key;
    } else {
        $res = false;
    }
    return $res;
}
