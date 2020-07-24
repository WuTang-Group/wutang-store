<?php

use Illuminate\Database\Seeder;

class UserAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAddress = factory(\App\Models\UserAddress::class)->times(50)->make();
        \App\Models\UserAddress::insert($userAddress->toArray());
    }
}
