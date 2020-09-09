<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = factory(\App\Models\Company::class)->times(30)->make();
        \App\Models\Company::insert($companies->toArray());
    }
}
