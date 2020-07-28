/** When your routing table is too long, you can split it into small modules**/

import Layout from '@/layout'

const userRouter = {
  path: '/user',
  component: Layout,
  redirect: '/user/list',
  name: 'UserManager',
  children: [
    {
      path: 'list',
      component: () => import('@/views/user/index'),
      name: 'User',
      meta: { title: '用户管理', icon: 'documentation', isBack: false }
    },
    {
      path: 'edit/:id(\\w+)',
      hidden: true,
      component: () => import('@/views/user/edit'),
      name: 'EditAccount',
      meta: { title: '编辑用户', icon: 'documentation' }
    }
  ]
}

export default userRouter
