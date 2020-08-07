<?php

use Illuminate\Database\Seeder;

class OrderItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderItem = factory(\App\Models\OrderItem::class)->times(20)->make();
        \App\Models\OrderItem::insert($orderItem->toArray());
    }
}
