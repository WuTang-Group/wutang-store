import Layout from '@/layout'

const assetImgRouter = {
  path: '/asset-img',
  component: Layout,
  redirect: 'asset-img/list',
  alwaysShow: true,
  name: 'AssetImg',
  meta: {
    title: 'AssetImg',
    icon: 'icon',
    roles: ['admin', 'editor']
  },
  children: [
    {
      path: '/list',
      component: () => import('@/views/assetImg/index'),
      name: 'AssetImgList',
      meta: { title: 'assetImgList', noCache: true }
    },
    {
      path: '/create-asset-img',
      component: () => import('@/views/assetImg/components/CreateAssetImg'),
      name: 'CreateAssetImg',
      hidden: true,
      meta: { title: 'createAssetImg', noCache: true }
    }
  ]
}

export default assetImgRouter
