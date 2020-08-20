<?php

use Illuminate\Database\Seeder;

class UserWishListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wishList = factory(\App\Models\UserWishList::class)->times(30)->make();
        \App\Models\UserWishList::insert($wishList->toArray());
    }
}
