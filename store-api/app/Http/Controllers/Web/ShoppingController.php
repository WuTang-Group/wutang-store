<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

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
        $client = new Client(['base_uri' => env('API_URL')]);
        $request = $client->request('GET', 'shop_carts', ['headers' => [
                'Authorization' => 'Bearer '.$this->token
            ]
        ]);
        $response = json_decode($request->getBody());

    	return View('cart', compact('response'));
    }

    public function wishlist(Request $request)
    {
    	return View('wishlist');
    }

    public function refresh_minicart(Request $request)
    {
        $count = 0;
        if($this->token) { //用户已登录
            $client = new Client(['base_uri' => env('API_URL')]);
            $request = $client->request('GET', 'shop_carts', ['headers' => [
                    'Authorization' => 'Bearer '.$this->token
                ]
            ]);
            $minicart_collection = json_decode($request->getBody());
            if($minicart_collection->code != 20001) {
                $minicart_collection = null;
            }
            $count = count($minicart_collection->data[0]->shop_cart_items);
        } else {
            $minicart_collection = null;
        }
        $minicart = view('partials.mini-cart', compact('minicart_collection'))->render();

        return response()->json(compact('minicart','count'));
    }
}