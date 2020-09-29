import Layout from '@/layout'

const theHouseRouter = {
  path: '/the-house',
  component: Layout,
  redirect: '/the-house/list',
  alwaysShow: true,
  name: 'TheHouse',
  meta: {
    title: 'theHouse',
    icon: 'table',
    roles: ['admin', 'editor']
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
        noCache: true
      }
    },
    {
      path: 'category-view',
      component: () => import('@/views/theHouse/theHouseCategory/components/createOrView'),
      redirect: '',
      hidden: true,
      name: 'HouseCategoryView',
      meta: {
        title: 'houseCategoryView'
      }
    },
    {
      path: 'content-list',
      component: () => import('@/views/theHouse/theHouseContent/index'),
      redirect: '',
      name: 'ContentList',
      meta: {
        title: 'theHouseContent',
        noCache: true
      }
    },
    {
      path: 'content-view',
      component: () => import('@/views/theHouse/theHouseContent/components/createOrView'),
      redirect: '',
      name: 'ContentView',
      hidden: true,
      meta: {
        title: 'contentView'
      }
    }
  ]
}

export default theHouseRouter
