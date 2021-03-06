<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    protected $token;
    //
    public function __construct()
    {
        $this->token = isset($_COOKIE['token']) ? $_COOKIE['token']:null;
    }

    public function index(Request $request)
    {
    	if(!$this->token) { return ''; }
    	$total = 0;
    	$client = new Client(['base_uri' => env('API_URL')]);
    	$promises = [
            'cart_items'   => $client->getAsync('shop_carts', ['headers' => [
					                'Authorization' => 'Bearer '.$this->token
					            ]
					        ]),
            /*'default_address' => $client->getAsync('user_profiles', ['headers' => [
					                'Authorization' => 'Bearer '.$this->token
					            ]
					        ]),*/
            'user_addresses' => $client->getAsync('user_addresses', ['headers' => [
                                    'Authorization' => 'Bearer '.$this->token
                                ]
                            ]),
        ];
        $responses = Promise\settle($promises)->wait();
        $results = array(
            'cart_items'   => json_decode($responses['cart_items']['value']->getBody()->getContents()),
            //'default_address' => json_decode($responses['default_address']['value']->getBody()->getContents())
            'user_addresses' => json_decode($responses['user_addresses']['value']->getBody()->getContents())
        );
        
        if(count($results['cart_items']->data[0]->shop_cart_items) <= 0) {
        	return redirect()->route('cart');
        }
        $count = count($results['cart_items']->data[0]->shop_cart_items);
        for($i = 0; $i < $count; $i++) {
        	$price = $results['cart_items']->data[0]->shop_cart_items[$i]->product->sale_price?:$results['cart_items']->data[0]->shop_cart_items[$i]->product->price;
        	$total+= $price;
    	}
    	return View('checkout', compact('results','count','total'));
    }

    public function refresh_addresses(Request $request)
    {
        $address_collection = null;
        $client = new Client(['base_uri' => env('API_URL')]);
        $req = $client->request('GET', 'user_addresses', ['headers' => [
                'Authorization' => 'Bearer '.$this->token
            ]
        ]);
        $address_collection = json_decode($req->getBody());
        
        if(isset($address_collection->code) && $address_collection->code != 20001) {
            $address_collection = null;
        }

        $addresses = view('partials.shipping-addresses', compact('address_collection'))->render();

        return response()->json(compact('addresses'));
    }
}