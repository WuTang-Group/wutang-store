import Layout from '@/layout'

const paymentRouter = {
  path: '/payment',
  component: Layout,
  name: 'Payment',
  alwaysShow: true,
  meta: {
    title: 'Payment',
    icon: 'payment'
  },
  children: [
    {
      path: 'legacy-express-list',
      component: () => import('@/views/payment/AlipayLegacyExpress/index'),
      name: 'LegacyExpressList',
      meta: {
        title: 'LegacyExpressList',
        noCache: true
      }
    },
    {
      path: 'create-legacy-express',
      component: () => import('@/views/payment/AlipayLegacyExpress/components/create-legary-express'),
      name: 'CreateLegacyExpress',
      hidden: true,
      meta: {
        title: 'createLegacyExpress'
      }
    },
    {
      path: 'payment-list',
      component: () => import('@/views/payment/payment/index'),
      name: 'PaymentList',
      meta: {
        title: 'paymentList'
      }
    }
  ]
}

export default paymentRouter
