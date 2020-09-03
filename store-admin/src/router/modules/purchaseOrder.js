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
    },
    {
      path: 'view-or-update',
      hidden: true,
      component: () => import('@/views/purchaseOrder/components/ViewOrUpdate'),
      name: 'ViewOrUpdate',
      meta: { title: 'purchaseOrderViewOrUpdate' }
    }
  ]
}

export default orderRouter
