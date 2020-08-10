<?php
namespace App\Services\Api;

use App\Models\UserAddress;
use App\Services\Service;

class UserAddressService extends Service
{
    private $userAddress;
    public function __construct(UserAddress $userAddress)
    {
        $this->userAddress = $userAddress;
    }

    public function queryList()
    {
        return $this->userAddress->whereUserId($this->user()->id)->get();
    }
}
