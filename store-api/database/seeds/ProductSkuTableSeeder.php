<?php

use Illuminate\Database\Seeder;

class ProductSkuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productSku = factory(\App\Models\ProductSku::class)->times(50)->make();
        \App\Models\ProductSku::insert($productSku->toArray());
    }
}
