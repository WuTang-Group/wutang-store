import Layout from '@/layout'

const orderRouter = {
  path: '/purchase-order',
  component: Layout,
  redirect: '/purchase-order/list',
  alwaysShow: true,
  name: 'PurchaseOrder',
  meta: {
    title: 'PurchaseOrder',
    icon: 'order'
  },
  children: [
    {
      path: 'list',
      component: () => import('@/views/purchaseOrder/index'),
      name: 'PurchaseOrderList',
      meta: { title: 'PurchaseOrderList' }
    }
  ]
}

export default orderRouter
