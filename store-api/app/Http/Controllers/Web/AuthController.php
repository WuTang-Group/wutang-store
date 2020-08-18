<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;

class AuthController extends Controller
{
    //
    public function __construct()
    {

    }

    public function login(Request $request)
    {
    	/*$client = new Client(['base_uri' => env('API_URL')]);
		$request = $client->request('POST', 'captchas');
		$response = json_decode($request->getBody());
    	return View('auth.login', compact('response'));*/
    }

    public function register(Request $request)
    {
    	$client = new Client(['base_uri' => env('API_URL')]);
        $promises = [
            'captcha'       => $client->postAsync('captchas'),
            'question_list' => $client->getAsync('question_list')
        ];
        $responses = Promise\settle($promises)->wait();
        $results = array(
            'captcha'       => json_decode($responses['captcha']['value']->getBody()->getContents()),
            'question_list' => json_decode($responses['question_list']['value']->getBody()->getContents())
        );
    	return View('auth.register', compact('results'));
    }


    public function forgot(Request $request)
    {
        $client = new Client(['base_uri' => env('API_URL')]);
        $request = $client->request('GET', 'question_list');
        $response = json_decode($request->getBody());

        return View('auth.passwords.forgot-password', compact('response'));
    }
}