import request from '@/utils/request'

// ======================The House================
export function theHouseList(param) {
  return request({
    url: 'admin/the_houses',
    method: 'get',
    params: param
  })
}

export function theHouseDetail(slug) {
  return request({
    url: '/admin/the_house/' + slug,
    method: 'get'
  })
}

export function theHouseStore(data) {
  return request({
    url: '/admin/the_house',
    method: 'post',
    data
  })
}

export function theHouseUpdate(slug, data) {
  return request({
    url: '/admin/the_house/' + slug,
    method: 'post',
    data
  })
}

export function theHouseDestroy(slug) {
  return request({
    url: '/admin/the_house/' + slug,
    method: 'delete'
  })
}

// ======================The House Category================
export function theHouseCategoryList(param) {
  return request({
    url: '/admin/the_house/category/list',
    method: 'get',
    params: param
  })
}

export function theHouseCategoryDetail(slug) {
  return request({
    url: '/admin/the_house/category/' + slug,
    method: 'get'
  })
}

export function theHouseCategoryStore(data) {
  return request({
    url: '/admin/the_house/category',
    method: 'post',
    data
  })
}

export function theHouseCategoryUpdate(slug, data) {
  return request({
    url: '/admin/the_house/category/' + slug,
    method: 'post',
    data
  })
}

export function theHouseCategoryDelete(slug) {
  return request({
    url: '/admin/the_house/category/' + slug,
    method: 'delete'
  })
}

// ======================The House Content================
export function theHouseContentList(param) {
  return request({
    url: '/admin/the_house_content/list',
    method: 'get',
    params: param
  })
}

export function contentDetail(id) {
  return request({
    url: '/admin/the_house_content/' + id,
    method: 'get'
  })
}

export function contentStore(data) {
  return request({
    url: '/admin/the_house_content',
    method: 'post',
    data
  })
}

export function contentUpdate(id, data) {
  return request({
    url: '/admin/the_house_content/' + id,
    method: 'post',
    data
  })
}

export function contentDelete(id) {
  return request({
    url: '/admin/the_house_content/' + id,
    method: 'delete'
  })
}

export function contentToTHeHouseList() {
  return request({
    url: '/admin/the_houses',
    method: 'get'
  })
}
