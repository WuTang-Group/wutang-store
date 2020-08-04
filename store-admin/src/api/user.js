import request from '@/utils/request'

export function login(data) {
  return request({
    url: 'auth/login',
    method: 'post',
    data
  })
}

export function getInfo(token) {
  return request({
    url: 'auth/me',
    method: 'get',
    params: { token }
  })
}

export function getInfoById(params) {
  return request({
    url: 'get_user',
    method: 'get',
    params: params
  })
}

export function logout() {
  return request({
    url: 'auth/logout',
    method: 'delete'
  })
}

export function fetchUserList(params) {
  return request({
    url: 'user_info',
    method: 'get',
    params
  })
}

export function editUserInfo(params) {
  return request({
    url: `user_info/${params.username}`,
    method: 'put',
    data: params.data
  })
}

export function deleteUser(data) {
  return request({
    url: `user_info/${data.username}`,
    method: 'delete'
  })
}

export function updateUserPassword(params) {
  return request({
    url: `user/password/${params.username}`,
    method: 'PUT',
    data: params.data
  })
}
