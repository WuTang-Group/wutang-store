<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    protected $token;

    public function __construct()
    {
        $this->token = isset($_COOKIE['token']) ? $_COOKIE['token']:null;
    }

    public function index(Request $request)
    {
        $client = new Client(['base_uri' => env('API_URL')]);
        $request = $client->request('GET', 'orders', ['headers' => [
                'Authorization' => 'Bearer '.$this->token
            ]
        ]);
        $response = json_decode($request->getBody());

        return View('my-account.index', compact('response'));
    }

    public function show(Request $request, $order_no)
    {
        $client = new Client(['base_uri' => env('API_URL')]);
        $request = $client->request('GET', 'order_details/'.$order_no, ['headers' => [
                'Authorization' => 'Bearer '.$this->token
            ]
        ]);
        $response = json_decode($request->getBody());

        return View('my-account.order-details', compact('response'));
    }

    public function profile(Request $request)
    {
        $client = new Client(['base_uri' => env('API_URL')]);
        $request = $client->request('GET', 'user_profile', ['headers' => [
                'Authorization' => 'Bearer '.$this->token
            ]
        ]);
        $response = json_decode($request->getBody());

        return View('my-account.profile', compact('response'));
    }
}
