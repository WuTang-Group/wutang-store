import request from '@/utils/request'

export function getList(query) {
  return request({
    url: 'product_categories',
    method: 'get',
    params: query
  })
}

export function testUpload(data) {
  return request({
    url: 'test_upload',
    method: 'post',
    data
  })
}
