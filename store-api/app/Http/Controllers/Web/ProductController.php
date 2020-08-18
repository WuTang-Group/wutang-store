<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use App\Traits\HttpResponseTrait;

class ProductController extends Controller
{
    use HttpResponseTrait;
    //
    public function __construct()
    {

    }

    public function index(Request $request)
    {

    }

    public function show(Request $request, $slug)
    {
        $client = new Client(['base_uri' => env('API_URL')]);
        $request = $client->request('GET', 'product/'.$slug);
        $response = json_decode($request->getBody());
        
        HttpResponseTrait::response('global', $response->data);

        return View('products.single-product', compact('response'));
    }
}