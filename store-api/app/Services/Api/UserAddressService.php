<?php

namespace App\Services\Api;

use App\Models\UserAddress;
use App\Services\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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

    public function store($queries)
    {
        try {
            $user = $this->user()->addresses()->create($queries);
        } catch (\Exception $e) {
            Log::error('用户地址新增失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $user;
    }

    public function edit($address_id, $request)
    {
        try {
            $userAddress = $this->userAddress
                ->where('id', $address_id)
                ->whereUserId($this->user()->id);
            $userAddress->update($request);
        } catch (\Exception $e) {
            Log::error('编辑用户地址失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $userAddress->get();
    }

    public function destroy($address_id)
    {
        try {
            $user_address = $this->userAddress->whereId($address_id)->whereUserId($this->user()->id);
            $userAddress = $user_address->delete();
        } catch (\Exception $e) {
            Log::error('删除用户地址失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $userAddress;
    }

    public function set_default($address_id)
    {
        try {
            DB::transaction(function () use ($address_id){
                $this->userAddress->find($address_id)->whereUserId($this->user()->id)->update(['is_default' => 1]);
                $this->userAddress->where('id', '<>', $address_id)->whereUserId($this->user()->id)->update(['is_default' => 0]);
            });
        } catch (\Exception $e) {
            Log::error('设置默认地址失败', ['msg' => $e->getMessage()]);
            return false;
        }
        return true;

    }
}
