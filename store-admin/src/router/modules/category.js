import Layout from '@/layout'

const categoryRouter = {
  path: '/category',
  component: Layout,
  redirect: '/category/list',
  alwaysShow: true,
  name: 'Category',
  meta: {
    title: 'category',
    icon: 'list'
  },
  children: [
    {
      path: 'list',
      component: () => import('@/views/category/index'),
      name: 'CategoryList',
      meta: { title: 'categoryList' }
    },
    {
      path: 'create-or-update',
      hidden: true,
      component: () => import('@/views/category/components/CreateOrUpdate'),
      name: 'CreateOrUpdate',
      meta: { title: '新增/编辑' }
    }
  ]
}
export default categoryRouter
