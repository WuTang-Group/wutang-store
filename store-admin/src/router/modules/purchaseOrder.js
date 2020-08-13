import Layout from '@/layout'

const orderRouter = {
  path: '/purchase-order',
  component: Layout,
  redirect: '/purchase-order/list',
  alwaysShow: true,
  name: 'PurchaseOrder',
  meta: {
    title: '订单管理',
    icon: 'order'
  },
  children: [
    {
      path: 'list',
      component: () => import('@/views/purchaseOrder/index'),
      name: 'PurchaseOrderList',
      meta: { title: '订单列表' }
    }
  ]
}

export default orderRouter
