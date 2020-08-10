<?php

namespace App\Services\Api;

use App\Models\UserAddress;
use App\Services\Service;
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
            Log::error($e->getMessage());
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
            Log::error($e->getMessage());
            return false;
        }
        return $userAddress->get();
    }

    public function destroy($address_id)
    {
        try{
            $user_address = $this->userAddress->whereId($address_id)->whereUserId($this->user()->id);
            $user_address->delete();
        }catch(\Exception $e){
            Log::error($e->getMessage());
            return false;
        }
        return true;
    }
}
