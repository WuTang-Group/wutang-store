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
      meta: { title: 'categoryList', noCache: true }
    },
    {
      path: 'create-category',
      hidden: true,
      component: () => import('@/views/category/components/CreateCategory'),
      name: 'CreateCategory',
      meta: { title: 'categoryCreate' }
    },
    {
      path: 'view-or-update',
      hidden: true,
      component: () => import('@/views/category/components/ViewOrUpdate'),
      name: 'CategoryViewOrUpdate',
      meta: { title: 'categoryViewOrUpdate' }
    },
    {
      path: 'category-story-list',
      component: () => import('@/views/categoryStory/index'),
      name: 'CategoryStoryList',
      meta: { title: 'categoryStoryList', noCache: true }
    },
    {
      path: 'create-category-story',
      hidden: true,
      component: () => import('@/views/categoryStory/components/CreateCategoryStory'),
      name: 'CreateCategoryStory',
      meta: { title: 'categoryStoryCreate' }
    },
    {
      path: 'view-update-story',
      hidden: true,
      component: () => import('@/views/categoryStory/components/ViewOrUpdate'),
      name: 'ViewUpdateStory',
      meta: { title: 'viewUpdateStory' }
    }
  ]
}
export default categoryRouter
