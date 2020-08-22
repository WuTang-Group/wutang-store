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

export function store(query) {
  return request({
    url: 'admin/product_categories',
    method: 'post',
    params: query
  })
}

export function storeForm(form) {
  return request({
    url: 'admin/product_categories',
    method: 'post',
    data: form
  })
}

export function categoryDetail(category_slug) {
  return request({
    url: 'admin/product_categories/' + category_slug,
    method: 'get'
  })
}
