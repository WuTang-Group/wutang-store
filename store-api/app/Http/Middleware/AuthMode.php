<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use Illuminate\Support\Facades\Cookie;
use App\Traits\HttpResponseTrait;
use Illuminate\Support\Facades\Log;
use Session;

class AuthMode
{
    use HttpResponseTrait;
    protected $token;

    public function __construct()
    {
        $this->token = isset($_COOKIE['token']) ? $_COOKIE['token']:null;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {	
        $client = new Client(['base_uri' => env('API_URL')]);
        $req = $client->request('GET', 'auth/me', ['headers' => [
                'Authorization' => 'Bearer '.$this->token
            ]
        ]);
        Session::put('intended_url', $request->url());

        $response = json_decode($req->getBody());

        HttpResponseTrait::response('auth', $response->code);

        return $next($request);
    }
}
