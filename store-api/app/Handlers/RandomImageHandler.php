<?php


namespace App\Handlers;


use GuzzleHttp\Client;

class RandomImageHandler
{
    public static function generateImage()
    {
        // 备用地址1:'https://api.vvhan.com/api/view?type=json'
        // 备用地址2:https://api.apiopen.top/getImages
        $client = new Client();
        $url = 'https://api.apiopen.top/getImages';
        $response = $client->request('get', $url, [
            'timeout' => 10,
            'query' => [
                'count' => '1',
            ]
        ]);
        $contents = json_decode($response->getBody()->getContents(), true);
        if ($contents['code'] == 200) {
            $result = [
                'img_url' => $contents['result'][0]['img']
            ];
            return (object)$result;
        }
    }
}
