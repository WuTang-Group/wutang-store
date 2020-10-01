<?php

namespace App\Services\Api;

use App\Models\ContactUs;
use App\Services\Service;
use Illuminate\Support\Facades\Log;

class ContactUsService extends Service
{
    private $contactUs;

    public function __construct(ContactUs $contactUs)
    {
        $this->contactUs = $contactUs;
    }

    public function store(object $params)
    {
        try {
            $requestData = $params->all();
            $requestData['user_id'] = $this->user()->id;
            return $this->contactUs->create($requestData);
        } catch (\Exception $e) {
            Log::error('联系我们-写入失败', [
                'msg' => $e->getMessage()
            ]);
            return false;
        }
    }

}
