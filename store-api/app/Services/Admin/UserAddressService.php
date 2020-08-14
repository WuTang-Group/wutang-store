<?php

namespace App\Services\Admin;

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

    public function queryList($queries)
    {
        $userRoles = $this->user()->getRoleNames();
        // 管理员
        if (Str::contains($userRoles, Roles::Admin)) {
            return $this->userAddress->paginate($queries['page_limit']);
        } else {
            return $this->userAddress->whereUserId($this->user()->id)->paginate($queries['page_limit']);
        }
    }

    public function store($queries)
    {
        try {
            $user = $this->user()->addresses()->create($queries);
        } catch (\Exception $e) {
            Log::error('添加用户地址失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $user;
    }

    public function update($address_id, $queries)
    {
        try {
            $userAddress = $this->userAddress->find($address_id);
            $userAddress->update($queries);
        } catch (\Exception $e) {
            Log::error('编辑用户地址失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $userAddress;
    }

    public function destroy($queries)
    {
        try {
            $userAddress = $this->userAddress->find($queries);
            $userAddress->delete();
        } catch (\Exception $e) {
            Log::error('删除用户地址失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $queries;
    }
}
