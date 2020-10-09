import request from '@/utils/request'

export function index() {
  return request({
    url: 'admin/union_pay/gateway',
    method: 'get'
  })
}

export function store(data) {
  return request({
    url: 'admin/union_pay/gateway',
    method: 'post',
    data
  })
}

export function update(unionId, data) {
  return request({
    url: '/admin/union_pay/gateway/' + unionId,
    method: 'put',
    data
  })
}

export function updateStatus(unionId, data) {
  return request({
    url: '/admin/union_pay/gateway/status/' + unionId,
    method: 'put',
    params: data
  })
}

export function destroy(unionId) {
  return request({
    url: 'admin/union_pay/gateway/' + unionId,
    method: 'delete'
  })
}
