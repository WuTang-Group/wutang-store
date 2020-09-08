<?php

use Illuminate\Database\Seeder;

class TheHouseCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $theHouses = factory(\App\Models\TheHouseCategory::class)->times(3)->make();
        \App\Models\TheHouseCategory::insert($theHouses->toArray());
    }
}
