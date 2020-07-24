<?php

use Illuminate\Database\Seeder;

class UserProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = factory(\App\Models\Profile::class)->times(50)->make();
        \App\Models\Profile::insert($profiles->toArray());
    }
}
