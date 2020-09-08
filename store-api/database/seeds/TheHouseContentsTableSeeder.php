<?php

use Illuminate\Database\Seeder;

class TheHouseContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $theHouseContents = factory(\App\Models\TheHouseContent::class)->times(50)->make();
        \App\Models\TheHouseContent::insert($theHouseContents->toArray());
    }
}
