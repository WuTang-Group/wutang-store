import request from '@/utils/request'

export function list() {
  return request({
    url: '/admin/member_codes',
    method: 'get'
  })
}
