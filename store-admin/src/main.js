import Vue from 'vue'

import Cookies from 'js-cookie'

import 'normalize.css/normalize.css' // a modern alternative to CSS resets

import Element from 'element-ui'
import './styles/element-variables.scss'

import '@/styles/index.scss' // global css

import App from './App'
import store from './store'
import router from './router'

import i18n from './lang' // internationalization
import './icons' // icon
import './permission' // permission control
import './utils/error-log' // error log
import VueParticles from 'vue-particles' // 粒子动画
import _lodash from 'lodash' // _lodash

import * as filters from './filters' // global filters

import permission from './directive/permission'

import moment from 'moment' // moment.js  // momentjs

// 注册权限检测指令
Vue.directive('permission', permission)

Vue.use(Element, {
  size: Cookies.get('size') || 'medium', // set element-ui default size
  i18n: (key, value) => i18n.t(key, value)
})

// 全局注册粒子动画
Vue.use(VueParticles)

// 全局注册
Vue.use(_lodash)

// register global utility filters
Object.keys(filters).forEach(key => {
  Vue.filter(key, filters[key])
})

// register global momentjs
Object.defineProperty(Vue.prototype, '$moment', { value: moment })

Vue.config.productionTip = false

new Vue({
  el: '#app',
  router,
  store,
  i18n,
  render: h => h(App)
})
