<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;

class ShoppingController extends Controller
{
    protected $token;
    //
    public function __construct()
    {
        $this->token = isset($_COOKIE['token']) ? $_COOKIE['token']:null;
    }

    public function cart(Request $request)
    {
        $response = null;
        if($this->token) {
            $client = new Client(['base_uri' => env('API_URL')]);
            $request = $client->request('GET', 'shop_carts', ['headers' => [
                    'Authorization' => 'Bearer '.$this->token
                ]
            ]);
            $response = json_decode($request->getBody());
        } else if(isset($_COOKIE['_WTSC'])) {
            $WTSC = json_decode($_COOKIE['_WTSC']);
            if(count($WTSC) > 0) {
                for ($i = 0; $i < count($WTSC); $i++) {
                    $ids[]= 'id_list[]='.$WTSC[$i]->id;
                }

                $client = new Client(['base_uri' => env('API_URL')]);
                $request = $client->request('GET', 'product_ids/?'.implode('&', $ids));

                $response = json_decode($request->getBody());

                $shop_cart_items = (object) ['shop_cart_items' => $response->data ];
                $response->data[0] = $shop_cart_items;
            }
        }

    	return View('cart', compact('response'));
    }

    public function wishlist(Request $request)
    {
    	return View('wishlist');
    }

    public function refresh_cart(Request $request)
    {
        $count = 0;
        if($this->token) { //用户已登录
            $client = new Client(['base_uri' => env('API_URL')]);
            $req = $client->request('GET', 'shop_carts', ['headers' => [
                    'Authorization' => 'Bearer '.$this->token
                ]
            ]);
            $cart_collection = json_decode($req->getBody());
        } else if(!empty($_COOKIE['_WTSC'])) {
            $WTSC = json_decode($_COOKIE['_WTSC']);
            if(count($WTSC) > 0) {
                for ($i = 0; $i < count($WTSC); $i++) {
                    $ids[]= 'id_list[]='.$WTSC[$i]->id;
                }

                $client = new Client(['base_uri' => env('API_URL')]);
                $request = $client->request('GET', 'product_ids/?'.implode('&', $ids));

                $cart_collection = json_decode($request->getBody());

                $shop_cart_items = (object) ['shop_cart_items' => $cart_collection->data ];
                $cart_collection->data[0] = $shop_cart_items;
            }
        }

        if($cart_collection->code != 20001) {
            $cart_collection = null;
        }
        $count = count($cart_collection->data[0]->shop_cart_items);

        $minicart = view('partials.mini-cart', compact('cart_collection'))->render();
        $cart = view('partials.cart', compact('cart_collection'))->render();

        return response()->json(compact('minicart','cart','count'));
    }
}