/** When your routing table is too long, you can split it into small modules**/

import Layout from '@/layout'

const userRouter = {
  path: '/user',
  component: Layout,
  redirect: '/user/list',
  alwaysShow: true,
  name: 'UserManager',
  meta: {
    title: 'userManager',
    icon: 'peoples',
    roles: ['admin', 'editor'] // you can set roles in root nav
  },
  children: [
    {
      path: 'list',
      component: () => import('@/views/user/index'),
      name: 'User',
      meta: { title: 'userList', isBack: false, noCache: true }
    },
    {
      path: 'permission',
      component: () => import('@/views/table/inline-edit-table'),
      name: 'Permission',
      meta: { title: 'permission' }
    },
    {
      path: 'role',
      component: () => import('@/views/table/inline-edit-table'),
      name: 'Role',
      meta: { title: 'role' }
    },
    {
      path: 'edit/:id(\\w+)',
      hidden: true,
      component: () => import('@/views/user/edit'),
      name: 'EditAccount',
      meta: { title: '编辑用户', icon: 'documentation' }
    },
    {
      path: '',
      component: () => import('@/views/user/memberCode'),
      name: 'MemberCode',
      meta: {
        title: 'MemberCode',
        icon: ''
      }
    }
  ]
}

export default userRouter
