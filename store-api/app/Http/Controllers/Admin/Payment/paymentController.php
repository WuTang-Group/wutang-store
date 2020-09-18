<?php

namespace App\Http\Controllers\Admin\Payment;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Admin\Payment\paymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class paymentController extends Controller
{
    protected $service;
    public function __construct(paymentService $service)
    {
        $this->service = $service;
    }

    public function getPayments(Request $request)
    {
        $result = $this->service->getPayments($request->all());
        return response()->json(ResponseData::requestSuccess($result));
    }

    public function paymentImgStoreById($id, Request $request)
    {
        $requestData = $request->only('img');
        $result = $this->service->paymentImgStoreById($id, $requestData);
        return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::requestFails());
    }
}
