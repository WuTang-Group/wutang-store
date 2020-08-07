import Layout from '@/layout'

const goodsRouter = {
  path: '/goods',
  component: Layout,
  redirect: '/goods/list',
  alwaysShow: true,
  name: 'Goods',
  meta: {
    title: 'goods',
    icon: 'goods'
  },
  children: [
    {
      path: 'list',
      component: () => import('@/views/table/inline-edit-table'),
      name: 'goodsList',
      meta: { title: '商品列表' }
    }
  ]
}

export default goodsRouter
