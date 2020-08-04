/** When your routing table is too long, you can split it into small modules**/

import Layout from '@/layout'

const userRouter = {
  path: '/user',
  component: Layout,
  redirect: '/user/list',
  alwaysShow: true,
  name: 'UserManager',
  meta: {
    title: '用户管理',
    icon: 'peoples',
    roles: ['admin', 'editor'] // you can set roles in root nav
  },
  children: [
    {
      path: 'list',
      component: () => import('@/views/user/index'),
      name: 'User',
      meta: { title: '用户列表', isBack: false, noCache: true }
    },
    {
      path: 'permission',
      component: () => import('@/views/table/inline-edit-table'),
      name: 'Permission',
      meta: { title: '权限管理' }
    },
    {
      path: 'role',
      component: () => import('@/views/table/inline-edit-table'),
      name: 'Role',
      meta: { title: '角色管理' }
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
