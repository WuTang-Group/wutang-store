import request from '@/utils/request'

export function getPaymentList(params) {
  return request({
    url: 'admin/payment',
    method: 'get',
    params: params
  })
}

export function PaymentImgUpdate(id, data) {
  return request({
    url: 'admin/payment/' + id,
    method: 'post',
    data
  })
}
