import Layout from '@/layout'

const logisticsRouter = {
  path: '/logistics',
  component: Layout,
  redirect: '/logistics/list',
  alwaysShow: true,
  name: 'Logistics',
  meta: {
    title: '物流管理',
    icon: 'logistics'
  },
  children: [
    {
      path: 'list',
      component: () => import('@/views/table/inline-edit-table'),
      name: 'LogisticsList',
      meta: { title: '物流列表' }
    }
  ]
}

export default logisticsRouter
