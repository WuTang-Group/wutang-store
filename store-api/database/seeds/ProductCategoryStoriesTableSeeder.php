<?php

use Illuminate\Database\Seeder;

class ProductCategoryStoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryStory = factory(\App\Models\ProductCategoryStory::class)->times(20)->make();
        \App\Models\ProductCategoryStory::insert($categoryStory->toArray());
    }
}
