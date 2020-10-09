import Layout from '@/layout'

const paymentRouter = {
  path: '/payment',
  component: Layout,
  name: 'Payment',
  alwaysShow: true,
  meta: {
    title: 'Payment',
    icon: 'payment',
    roles: ['admin']
  },
  children: [
    {
      path: 'payment-list',
      component: () => import('@/views/payment/payment/index'),
      name: 'PaymentList',
      meta: {
        title: 'paymentList'
      }
    },
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
      path: 'bank-gateway-list',
      component: () => import('@/views/payment/AlipayBankGateway/index'),
      name: 'BankGatewayList',
      meta: {
        title: 'bankGatewayList',
        noCache: true
      }
    },
    {
      path: 'create-bank-gateway',
      component: () => import('@/views/payment/AlipayBankGateway/components/create-bank-gateway'),
      name: 'CreateBankGateway',
      hidden: true,
      meta: {
        title: 'createBankGateway'
      }
    },
    {
      path: 'union-gateway-list',
      component: () => import('@/views/payment/UnionPayGateway/index'),
      name: 'UnionGatewayList',
      meta: {
        title: 'unionGatewayList',
        noCache: true
      }
    },
    {
      path: 'create-union-gateway',
      component: () => import('@/views/payment/UnionPayGateway/components/create-union-gateway'),
      name: 'CreateUnionGateway',
      hidden: true,
      meta: {
        title: 'createUnionGateway'
      }
    }
  ]
}

export default paymentRouter
