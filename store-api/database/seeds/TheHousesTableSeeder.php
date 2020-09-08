<?php

use Illuminate\Database\Seeder;

class TheHousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $theHouses = factory(\App\Models\TheHouse::class)->times(50)->make();
        \App\Models\TheHouse::insert($theHouses->toArray());
    }
}
