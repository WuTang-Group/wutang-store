import request from '@/utils/request'

export function index() {
  return request({
    url: 'admin/alipay/bank_gateway',
    method: 'get'
  })
}

export function store(data) {
  return request({
    url: 'admin/alipay/bank_gateway',
    method: 'post',
    data
  })
}

export function update(alipayId, data) {
  return request({
    url: '/admin/alipay/bank_gateway/' + alipayId,
    method: 'put',
    data
  })
}

export function updateStatus(alipayId, data) {
  return request({
    url: '/admin/alipay/bank_gateway/status/' + alipayId,
    method: 'put',
    params: data
  })
}

export function destroy(alipayId) {
  return request({
    url: 'admin/alipay/bank_gateway/' + alipayId,
    method: 'delete'
  })
}
