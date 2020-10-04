<?php

use Illuminate\Database\Seeder;

class ShopCartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shopCarts = factory(\App\Models\ShopCartItem::class)->times(30)->make();
        \App\Models\ShopCartItem::insert($shopCarts->toArray());
    }
}
