import Layout from '@/layout'

const logManage = {
  path: '/log-manage',
  component: Layout,
  redirect: '/log-manage/system-log',
  alwaysShow: true,
  name: 'LogManage',
  meta: {
    title: 'logManage',
    icon: 'documentation'
  },
  children: [
    {
      path: 'system-log',
      component: () => import('@/views/log-manage/index'),
      name: 'SystemLog',
      meta: { title: 'SystemLog' }
    },
    {
      path: 'login-log',
      component: () => import('@/views/log-manage/components/LoginLog'),
      name: 'LoginLog',
      meta: { title: 'LoginLog' }
    }
  ]
}

export default logManage
