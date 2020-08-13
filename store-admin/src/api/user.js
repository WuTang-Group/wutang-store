import request from '@/utils/request'

export function login(data) {
  return request({
    url: 'api/auth/login',
    method: 'post',
    data
  })
}

export function getInfo(token) {
  return request({
    url: 'api/auth/me',
    method: 'get',
    params: { token }
  })
}

export function getInfoById(params) {
  return request({
    url: 'admin/user',
    method: 'get',
    params: params
  })
}

export function logout() {
  return request({
    url: 'api/auth/logout',
    method: 'delete'
  })
}

export function fetchUserList(params) {
  return request({
    url: 'admin/user',
    method: 'get',
    params
  })
}

export function editUserInfo(params) {
  return request({
    url: `admin/user/${params.username}`,
    method: 'put',
    data: params.data
  })
}

export function deleteUser(data) {
  return request({
    url: `admin/user/${data.username}`,
    method: 'delete'
  })
}

export function updateUserPassword(params) {
  return request({
    url: `admin/user/reset_password/${params.username}`,
    method: 'PUT',
    data: params.data
  })
}
