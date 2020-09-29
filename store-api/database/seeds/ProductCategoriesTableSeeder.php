<?php

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productCategory = factory(\App\Models\ProductCategory::class)->times(10)->make();
        \App\Models\ProductCategory::insert($productCategory->toArray());
    }
}
