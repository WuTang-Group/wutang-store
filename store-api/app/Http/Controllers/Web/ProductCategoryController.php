<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use App\Traits\HttpResponseTrait;
use App\Traits\ProductTrait;

class ProductCategoryController extends Controller
{
    use HttpResponseTrait,ProductTrait;
    //
    public function __construct()
    {

    }

    public function index()
    {
        $client = new Client(['base_uri' => env('API_URL')]);
        $request = $client->request('GET', 'product_category');
        $response = json_decode($request->getBody());
        $products = $this->product();

        return View('product-category.index', compact('response','products'));
    }

    public function show(Request $request, $slug)
    {
        $client = new Client(['base_uri' => env('API_URL')]);
        $request = $client->request('GET', 'product_category/'.$slug);
        $response = json_decode($request->getBody());

        $products = $this->product();
        HttpResponseTrait::response('global',$response->data);
 
        if(!empty($response->data[0]->children)) {
            return View('product-category.category', compact('response','products'));
        }
        
        return View('product-category.single', compact('response'));
    }

    public function story(Request $request, $slug)
    {
        $client = new Client(['base_uri' => env('API_URL')]);
        $request = $client->request('GET', 'category_story/'.$slug);
        $response = json_decode($request->getBody());

        HttpResponseTrait::response('global',$response->data);

        return View('product-category.story', compact('response'));
    }
}