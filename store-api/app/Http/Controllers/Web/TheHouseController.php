<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;

class TheHouseController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        return View('the-house.index');
    }

    //public function category(Request $request, $slug)
    public function category(Request $request)
    {
        return View('the-house.the-house');
    }

    /*public function show(Request $request, $slug)
    {
        return View('the-house.the-house');
    }*/

    //public function show(Request $request, $slug)
    public function show(Request $request)
    {
        return View('the-house.single-the-house');
    }
}