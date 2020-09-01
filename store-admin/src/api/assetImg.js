import request from '@/utils/request'

export function getList(query) {
  return request({
    url: 'admin/asset_img',
    path: 'get',
    params: query
  })
}

export function createAssetImg(data) {
  return request({
    url: 'admin/asset_img',
    method: 'post',
    data
  })
}

export function deleteAssetImg(assetImgId) {
  return request({
    url: 'admin/asset_img/' + assetImgId,
    method: 'delete'
  })
}
