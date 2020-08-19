<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Observers\ProductCategoryObserver;
use App\Observers\ProductObserver;
use Illuminate\Support\Facades\Schema;
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
        $this->app->singleton('alipay', function () {
            $config = config('pay.alipay');
            // 判断当前项目运行环境是否为线上环境
            if (app()->environment() !== 'production') {
                $config['mode'] = 'dev';
                $config['log']['level'] = Logger::DEBUG;
            } else {
                $config['log']['level'] = Logger::WARNING;
            }
            // 调用 Yansongda\Pay 来创建一个支付宝支付对象
            return Pay::alipay($config);
        });

        $this->app->singleton('wechat_pay', function () {
            $config = config('pay.wechat');
            if (app()->environment() !== 'production') {
                $config['log']['level'] = Logger::DEBUG;
            } else {
                $config['log']['level'] = Logger::WARNING;
            }
            // 调用 Yansongda\Pay 来创建一个微信支付对象
            return Pay::wechat($config);
        });
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

        // 获取购物车商品
        $token = isset($_COOKIE['token']) ? $_COOKIE['token']:null;

        $minicart_collection = null;

        if($token) { //用户已登录
            $client = new Client(['base_uri' => env('API_URL')]);
            $request = $client->request('GET', 'shop_carts', ['headers' => [
                    'Authorization' => 'Bearer '.$token
                ]
            ]);
            $minicart_collection = json_decode($request->getBody());
        } else if(isset($_COOKIE['_WTSC'])) {
            $WTSC = json_decode($_COOKIE['_WTSC']);
            for ($i = 0; $i < count($WTSC); $i++) {
                $ids[]= 'id_list[]='.$WTSC[$i]->id;
            }

            $client = new Client(['base_uri' => env('API_URL')]);
            $request = $client->request('GET', 'product_ids/?'.implode('&', $ids));

            $minicart_collection = json_decode($request->getBody());

            $shop_cart_items = (object) ['shop_cart_items' => $minicart_collection->data ];
            $minicart_collection->data[0] = $shop_cart_items;
        }
        
        if(isset($minicart_collection->code) && $minicart_collection->code != 20001) {
            $minicart_collection = null;
        }
        $count = isset($minicart_collection->data[0]) ? count($minicart_collection->data[0]->shop_cart_items):0;

        View::share('minicart_collection', $minicart_collection);
        View::share('count', $count);
    }
}
