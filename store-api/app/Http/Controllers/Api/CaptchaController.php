<?php

namespace App\Http\Controllers\Api;

use App\Enums\CacheKeyPrefix;
use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Support\Str;

/**
 * @group [API] Captcha
 * 验证码管理
 * @package App\Http\Controllers\Api
 */
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
        $key = CacheKeyPrefix::CaptchaCache.Str::random(15);
        $captcha = $captchaBuilder->build();
        $expiredAt = now()->addMinutes(15);  //15分钟有效期
        \Cache::put($key, ['code'=>strtolower($captcha->getPhrase())],$expiredAt);

        $result = [
            'captcha_key' => $key,
            'expired_at' => $expiredAt->toDateTimeString(),
            'captcha_image_content' => $captcha->inline()
        ];

        return response()->json(ResponseData::requestSuccess($result));
    }
}
