<?php
/**
 * 自定义助手函数库
 */

// 分页助手
function page_limit($queries = null)
{
    $requestData = $queries;
    // 对请求参数默认分页参数进行过滤赋值
    $requestData['page'] = isset($queries['page']) ? $queries['page'] : 1;
    $requestData['page_limit'] = isset($queries['page_limit']) ? $queries['page_limit'] : 20;
    return $requestData;
}
