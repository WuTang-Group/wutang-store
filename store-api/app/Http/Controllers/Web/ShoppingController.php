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

    public function refresh_cart(Request $request)
    {
        $count = 0;

        $client = new Client(['base_uri' => env('API_URL')]);
        $req = $client->request('GET', 'shop_carts', ['headers' => [
                'Authorization' => 'Bearer '.$this->token
            ]
        ]);
        $cart_collection = json_decode($req->getBody());

        
        if(isset($cart_collection->code) && $cart_collection->code != 20001) {
            $cart_collection = null;
        }
        $count = isset($cart_collection->data[0]) ? count($cart_collection->data[0]->shop_cart_items):0;

        $minicart = view('partials.mini-cart', compact('cart_collection'))->render();
        $cart = view('partials.cart', compact('cart_collection'))->render();

        return response()->json(compact('minicart','cart','count'));
    }
}