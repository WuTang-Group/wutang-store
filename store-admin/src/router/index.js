import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

/* Layout */
import Layout from '@/layout'

/* Router Modules */
import categoriesRouter from '@/router/modules/category'
import usersRouter from '@/router/modules/user'
import purchaseOrder from '@/router/modules/purchaseOrder'
import productRouter from '@/router/modules/product'
import logisticsRouter from '@/router/modules/logistics'
import paymentRouter from '@/router/modules/payment'
import logManage from '@/router/modules/logManage'
import assetImgRouter from '@/router/modules/assetImg'
import theHouseRouter from '@/router/modules/theHouse'

// https://webpack.js.org/guides/dependency-management/#requirecontext
// const modulesFiles = require.context('./modules', true, /\.js$/)

// you do not need `import app from './modules/app'`
// it will auto require all vuex module from modules file
// const routeModules = modulesFiles.keys().map(modulePath => {
//   const value = modulesFiles(modulePath)
//   return value.default
// }, {})

/**
 * Note: sub-menu only appear when route children.length >= 1
 * Detail see: https://panjiachen.github.io/vue-element-admin-site/guide/essentials/router-and-nav.html
 *
 * hidden: true                   if set true, item will not show in the sidebar(default is false)
 * alwaysShow: true               if set true, will always show the root menu
 *                                if not set alwaysShow, when item has more than one children route,
 *                                it will becomes nested mode, otherwise not show the root menu
 * redirect: noRedirect           if set noRedirect will no redirect in the breadcrumb
 * name:'router-name'             the name is used by <keep-alive> (must set!!!)
 * meta : {
    roles: ['admin','editor']    control the page roles (you can set multiple roles)
    title: 'title'               the name show in sidebar and breadcrumb (recommend set)
    icon: 'svg-name'/'el-icon-x' the icon show in the sidebar
    noCache: true                if set true, the page will no be cached(default is false)
    affix: true                  if set true, the tag will affix in the tags-view
    breadcrumb: false            if set false, the item will hidden in breadcrumb(default is true)
    activeMenu: '/example/list'  if set path, the sidebar will highlight the path you set
  }
 */

/**
 * constantRoutes
 * a base page that does not have permission requirements
 * all roles can be accessed
 */
export const constantRoutes = [
  {
    path: '/redirect',
    component: Layout,
    hidden: true,
    children: [
      {
        path: '/redirect/:path(.*)',
        component: () => import('@/views/redirect/index')
      }
    ]
  },
  {
    path: '/login',
    component: () => import('@/views/login/index'),
    hidden: true
  },
  {
    path: '/auth-redirect',
    component: () => import('@/views/login/auth-redirect'),
    hidden: true
  },
  {
    path: '/404',
    component: () => import('@/views/error-page/404'),
    hidden: true
  },
  {
    path: '/401',
    component: () => import('@/views/error-page/401'),
    hidden: true
  },
  {
    path: '/',
    component: Layout,
    redirect: '/dashboard',
    children: [
      {
        path: 'dashboard',
        component: () => import('@/views/dashboard/index'),
        name: 'Dashboard',
        meta: { title: 'dashboard', icon: 'dashboard', affix: true }
      }
    ]
  },
  {
    path: '/profile',
    component: Layout,
    redirect: '/profile/index',
    hidden: true,
    children: [
      {
        path: 'index',
        component: () => import('@/views/profile/index'),
        name: 'Profile',
        meta: { title: 'profile', icon: 'user', noCache: true }
      }
    ]
  }
]

/**
 * asyncRoutes
 * the routes that need to be dynamically loaded based on user roles
 */
export const asyncRoutes = [
  usersRouter,
  categoriesRouter,
  productRouter,
  purchaseOrder,
  logisticsRouter,
  paymentRouter,
  assetImgRouter,
  theHouseRouter,
  {
    path: '/user-center',
    component: Layout,
    redirect: '/user-center/modify',
    alwaysShow: true,
    name: 'UserCenter',
    meta: {
      title: 'UserCenter',
      icon: 'user'
    },
    children: [
      {
        path: 'modify',
        component: () => import('@/views/center/modify'),
        name: 'ModifyInfo',
        meta: {
          title: 'ModifyInfo'
        }
      }
    ]
  },
  logManage,

  // 404 page must be placed at the end !!!
  { path: '*', redirect: '/404', hidden: true }
]

/**
 * asyncRoutes
 * the routes that need to be dynamically loaded based on user roles
 */
// export const asyncRoutes = [
//   ...routeModules,

//   // 404 page must be placed at the end !!!
//   { path: '*', redirect: '/404', hidden: true }
// ]

const createRouter = () => new Router({
  mode: 'history', // require service support
  scrollBehavior: () => ({ y: 0 }),
  routes: constantRoutes
})

const router = createRouter()

// Detail see: https://github.com/vuejs/vue-router/issues/1234#issuecomment-357941465
export function resetRouter() {
  const newRouter = createRouter()
  router.matcher = newRouter.matcher // reset router
}

export default router
