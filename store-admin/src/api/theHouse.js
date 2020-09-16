import request from '@/utils/request'

// ======================The House================
export function theHouseList(param) {
  return request({
    url: 'admin/the_house/list',
    method: 'get',
    params: param
  })
}

export function theHouseDetail(slug) {
  return request({
    url: '/admin/the_house/detail/' + slug,
    method: 'get'
  })
}

export function theHouseStore(data) {
  return request({
    url: '/admin/the_house/store',
    method: 'post',
    data
  })
}

export function theHouseUpdate(slug, data) {
  return request({
    url: '/admin/the_house/update/' + slug,
    method: 'put',
    data
  })
}

export function theHouseDestroy(slug) {
  return request({
    url: '/admin/the_house/destroy/' + slug,
    method: 'delete'
  })
}

// ======================The House Category================
export function theHouseCategoryList(param) {
  return request({
    url: '/admin/the_house/category_list',
    method: 'get',
    params: param
  })
}

// ======================The House Category================
export function theHouseContentList(param) {
  return request({
    url: '/admin/the_house/content_list',
    method: 'get',
    params: param
  })
}
