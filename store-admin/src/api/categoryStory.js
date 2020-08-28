import request from '@/utils/request'

export function getList(query) {
  return request({
    url: 'admin/category_stories',
    method: 'get',
    params: query
  })
}

export function store(query) {
  return request({
    url: 'admin/category_stories',
    method: 'post',
    data: query
  })
}

export function storyDetail(category_stories_id) {
  return request({
    url: 'admin/category_stories/' + category_stories_id,
    method: 'get'
  })
}

export function storyEdit(query, category_stories_id) {
  return request({
    url: 'admin/category_stories/' + category_stories_id,
    method: 'post',
    data: query
  })
}

export function deleteStory(category_stories_id) {
  return request({
    url: '/admin/category_stories/' + category_stories_id,
    method: 'delete'
  })
}
