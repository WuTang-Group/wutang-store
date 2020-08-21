import Layout from '@/layout'

const productRouter = {
  path: '/product',
  component: Layout,
  redirect: '/product/list',
  alwaysShow: true,
  name: 'Product',
  meta: {
    title: 'product',
    icon: 'goods'
  },
  children: [
    {
      path: 'list',
      component: () => import('@/views/product/index'),
      name: 'productList',
      meta: { title: 'productList' }
    },
    {
      path: 'view-or-update',
      component: () => import('@/views/product/components/ViewOrUpdate'),
      hidden: true,
      name: 'productViewOrUpdate',
      meta: { title: 'productViewOrUpdate', noCache: false }
    }
  ]
}

export default productRouter
