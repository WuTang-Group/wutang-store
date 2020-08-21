import request from '@/utils/request'

export function getList(query) {
  return request({
    url: 'admin/product',
    method: 'get',
    params: query
  })
}

export function productDetail(product_slug) {
  return request({
    url: 'admin/product/' + product_slug,
    method: 'get'
  })
}
