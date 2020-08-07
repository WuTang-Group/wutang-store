<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = factory(\App\Models\Order::class)->times(20)->make();
        \App\Models\Order::insert($order->toArray());
    }
}
