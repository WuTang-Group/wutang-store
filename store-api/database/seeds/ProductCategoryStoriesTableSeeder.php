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
        $categoryStory = factory(\App\Models\ProductCategoryStory::class)->times(50)->make();
        \App\Models\ProductCategoryStory::insert($categoryStory->toArray());
    }
}
