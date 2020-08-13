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
      meta: { title: '商品列表' }
    }
  ]
}

export default productRouter
