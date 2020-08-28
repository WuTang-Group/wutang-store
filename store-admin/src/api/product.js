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

export function productStore(query) {
  return request({
    url: 'admin/product',
    method: 'post',
    data: query
  })
}

export function productUpdate(product_slug, query) {
  return request({
    url: 'admin/product/' + product_slug,
    method: 'post',
    data: query
  })
}

export function productDelete(product_slug) {
  return request({
    url: 'admin/product/' + product_slug,
    method: 'delete'
  })
}
