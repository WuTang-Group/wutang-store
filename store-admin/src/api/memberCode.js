import request from '@/utils/request'

export function list() {
  return request({
    url: '/admin/member_codes',
    method: 'get'
  })
}

export function memberCodeDetail(member_code) {
  return request({
    url: 'admin/member_code/' + member_code,
    method: 'get'
  })
}
