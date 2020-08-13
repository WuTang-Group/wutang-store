import request from '@/utils/request'

export function getList($query) {
  return request({
    url: 'admin/order',
    method: 'get',
    params: $query
  })
}
