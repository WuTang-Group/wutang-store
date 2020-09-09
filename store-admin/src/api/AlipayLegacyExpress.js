import request from '@/utils/request'

export function alipayList(query) {
  return request({
    url: '/admin/alipay/legacy_express',
    method: 'get',
    params: query
  })
}

export function store(data) {
  return request({
    url: '/admin/alipay/legacy_express',
    method: 'post',
    data
  })
}

export function destroy(alipayId) {
  return request({
    url: 'admin/alipay/legacy_express/' + alipayId,
    method: 'delete'
  })
}

export function updateStatus(alipayId, data) {
  return request({
    url: '/admin/alipay/legacy_express/status/' + alipayId,
    method: 'put',
    params: data
  })
}

export function update(alipayId, data) {
  return request({
    url: '/admin/alipay/legacy_express/' + alipayId,
    method: 'put',
    data
  })
}

