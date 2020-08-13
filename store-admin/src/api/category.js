import request from '@/utils/request'

export function getList(query) {
  return request({
    url: 'admin/product_categories',
    method: 'get',
    params: query
  })
}

export function testUpload(data) {
  return request({
    url: 'admin/test_upload',
    method: 'post',
    data
  })
}
