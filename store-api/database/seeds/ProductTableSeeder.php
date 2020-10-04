<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = factory(\App\Models\Product::class)->times(30)->make();
        \App\Models\Product::insert($product->toArray());
    }
}
