<?php

namespace App\Providers;

use App\Models\AlipayBankGateway;
use App\Models\AlipayLegacyExpress;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\TheHouse;
use App\Models\TheHouseCategory;
use App\Observers\AlipayBankGatewayObserver;
use App\Observers\AlipayLegacyExpressObserver;
use App\Observers\ProductCategoryObserver;
use App\Observers\ProductObserver;
use App\Observers\TheHouseCategoryObserver;
use App\Observers\TheHouseObserver;
use Illuminate\Support\ServiceProvider;
use Monolog\Logger;
use Yansongda\Pay\Pay;
use Illuminate\Support\Facades\View;
use GuzzleHttp\Client;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // 往服务容器中注入一个名为 alipay 的单例对象
//        $this->app->singleton('alipay', function () {
//            $config = config('pay.alipay');
//            // 判断当前项目运行环境是否为线上环境
//            if (app()->environment() !== 'production') {
//                $config['mode'] = 'dev';
//                $config['log']['level'] = Logger::DEBUG;
//            } else {
//                $config['log']['level'] = Logger::WARNING;
//            }
//            // 调用 Yansongda\Pay 来创建一个支付宝支付对象
//            return Pay::alipay($config);
//        });

//        $this->app->singleton('wechat_pay', function () {
//            $config = config('pay.wechat');
//            if (app()->environment() !== 'production') {
//                $config['log']['level'] = Logger::DEBUG;
//            } else {
//                $config['log']['level'] = Logger::WARNING;
//            }
//            // 调用 Yansongda\Pay 来创建一个微信支付对象
//            return Pay::wechat($config);
//        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//         Schema::defaultStringLength(191);
        // 注册产品观察者
        Product::observe(ProductObserver::class);
        // 注册产品分类观察者
        ProductCategory::observe(ProductCategoryObserver::class);
        // 注册 AlipayLegacyExpress 观察者
        AlipayLegacyExpress::observe(AlipayLegacyExpressObserver::class);
        // 注册 AlipayBankGateway 观察者
        AlipayBankGateway::observe(AlipayBankGatewayObserver::class);
        // 注册TheHouse 观察者
        TheHouse::observe(TheHouseObserver::class);
        // 注册TheHouseCategory 观察者
        TheHouseCategory::observe(TheHouseCategoryObserver::class);

        // 获取购物车商品
        $token = isset($_COOKIE['token']) ? $_COOKIE['token']:null;

        $cart_collection = null;

        if($token) { //用户已登录
            $client = new Client(['base_uri' => env('API_URL')]);
            $request = $client->request('GET', 'shop_carts', ['headers' => [
                    'Authorization' => 'Bearer '.$token
                ]
            ]);
            $cart_collection = json_decode($request->getBody());
        }

        if(isset($cart_collection->code) && $cart_collection->code != 20001) {
            $cart_collection = null;
        }
        $count = isset($cart_collection->data[0]) ? count($cart_collection->data[0]->shop_cart_items):0;

        View::share('cart_collection', $cart_collection);
        View::share('count', $count);
    }
}
