<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use Illuminate\Support\Facades\Cookie;
use App\Traits\HttpResponseTrait;

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
        $promise = $client->requestAsync('GET', 'auth/me', ['headers' => [
                'Authorization' => 'Bearer '.$this->token
            ]
        ]);
        $response = Promise\settle($promise)->wait();
        $auth = json_decode($response[0]['value']->getBody()->getContents());

        HttpResponseTrait::response('auth', $auth->code);

        return $next($request);
    }
}
