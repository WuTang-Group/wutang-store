import request from '@/utils/request'

export function getSystemLog(query) {
  return request({
    url: 'admin/logs/system_logs',
    method: 'get',
    params: query
  })
}

export function getLoginLog(query) {
  return request({
    url: 'admin/logs/login_logs',
    method: 'get',
    params: query
  })
}

export function getPayLog(query) {
  return request({
    url: 'admin/logs/pay_logs',
    method: 'get',
    params: query
  })
}

export function getOrderLog(query) {
  return request({
    url: 'admin/logs/order_logs',
    method: 'get',
    params: query
  })
}
