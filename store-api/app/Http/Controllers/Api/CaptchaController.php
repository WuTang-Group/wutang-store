<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CaptchaRequest;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Support\Str;

class CaptchaController extends Controller
{
    /**
     * Generate captcha code and save to cache
     * 生成验证码并写入缓存
     * @param CaptchaBuilder $captchaBuilder
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CaptchaBuilder $captchaBuilder)
    {
        $key = 'captcha-'.Str::random(15);
        $captcha = $captchaBuilder->build();
        $expiredAt = now()->addMinutes(15);  //15分钟有效期
        \Cache::put($key, ['code'=>strtolower($captcha->getPhrase()),$expiredAt]);

        $result = [
            'captcha_key' => $key,
            'expired_at' => $expiredAt->toDateTimeString(),
            'captcha_image_content' => $captcha->inline()
        ];

        return response()->json(ResponseData::requestSuccess($result));
    }
}
