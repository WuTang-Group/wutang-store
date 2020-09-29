import Layout from '@/layout'

const logisticsRouter = {
  path: '/logistics',
  component: Layout,
  redirect: '/logistics/list',
  alwaysShow: true,
  name: 'Logistics',
  meta: {
    title: 'Logistics',
    icon: 'logistics',
    roles: ['admin']
  },
  children: [
    {
      path: 'list',
      component: () => import('@/views/table/inline-edit-table'),
      name: 'LogisticsList',
      meta: { title: 'LogisticsList' }
    }
  ]
}

export default logisticsRouter
