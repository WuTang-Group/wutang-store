<?php

namespace App\Traits;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

trait ProductTrait
{
    /**
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    protected function product()
    {
        $client = new Client(['base_uri' => env('API_URL')]);
        $request = $client->request('GET', 'product_status/1');
        $response = json_decode($request->getBody());

        return $response;
    }
}
