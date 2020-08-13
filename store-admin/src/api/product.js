import request from '@/utils/request'

export function getList(query) {
  return request({
    url: 'admin/product',
    method: 'get',
    params: query
  })
}
