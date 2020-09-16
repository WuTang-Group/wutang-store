import Layout from '@/layout'

const theHouseRouter = {
  path: '/the-house',
  component: Layout,
  redirect: '/the-house/list',
  alwaysShow: true,
  name: 'TheHouse',
  meta: {
    title: 'theHouse',
    icon: 'table'
  },
  children: [
    {
      path: 'list',
      component: () => import('@/views/theHouse/theHouse/index'),
      redirect: '',
      name: 'TheHouseList',
      meta: {
        title: 'theHouseList',
        noCache: true
      }
    },
    {
      path: 'create-view',
      component: () => import('@/views/theHouse/theHouse/components/createOrView'),
      name: 'CreateOrView',
      hidden: true,
      meta: {
        title: 'createOrView'
      }
    },
    {
      path: 'category-list',
      component: () => import('@/views/theHouse/theHouseCategory/index'),
      redirect: '',
      name: 'HouseCategoryList',
      meta: {
        title: 'houseCategoryList',
        icon: ''
      }
    },
    {
      path: 'content-list',
      component: () => import('@/views/theHouse/theHouseContent/index'),
      redirect: '',
      name: 'ContentList',
      meta: {
        title: 'theHouseContent',
        icon: ''
      }
    }
  ]
}

export default theHouseRouter
