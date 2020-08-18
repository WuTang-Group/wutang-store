<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use App\Traits\ProductTrait;

class HomeController extends Controller
{
    use ProductTrait;
    //
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $products = $this->product();

        return View('home', compact('products'));
    }
}