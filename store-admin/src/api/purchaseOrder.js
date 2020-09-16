import request from '@/utils/request'

export function getList(query) {
  return request({
    url: 'admin/order',
    method: 'get',
    params: query
  })
}

export function orderUpdate(data) {
  return request({
    url: 'admin/order/' + data.id,
    method: 'post',
    data
  })
}

export function orderDetail(orderNo) {
  return request({
    url: 'admin/order/' + orderNo,
    method: 'get'
  })
}
