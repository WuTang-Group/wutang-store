import request from '@/utils/request'

// 获取公司列表
export function getCompanies(query) {
  return request({
    url: 'admin/companies',
    method: 'get',
    params: query
  })
}

// 根据公司id获取部门信息
export function getDepartmentsByCompanyName(name) {
  return request({
    url: 'admin/company/departments/' + name,
    method: 'get'
  })
}
