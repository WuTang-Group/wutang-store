<?php
namespace App\Services\Api;

use App\Enums\Roles;
use App\Models\UserAddress;
use App\Services\Service;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class UserAddressService extends Service
{
    private $userAddress;

    public function __construct(UserAddress $userAddress)
    {
        $this->userAddress = $userAddress;
    }

    public function list($queries)
    {
        $userRoles = $this->user()->getRoleNames();
        // 管理员
        if(Str::contains($userRoles,Roles::Admin)){
            return $this->userAddress->paginate($queries['page_limit']);
        }else{
            return $this->userAddress->whereUserId($this->user()->id)->paginate($queries['page_limit']);
        }
    }

    public function store($queries)
    {
        try {
            $user = $this->user()->addresses()->create($queries);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
        return $user;
    }
}
