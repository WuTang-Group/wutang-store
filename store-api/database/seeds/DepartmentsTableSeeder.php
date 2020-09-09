<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = factory(\App\Models\Department::class)->times(30)->make();
        \App\Models\Department::insert($departments->toArray());
    }
}
