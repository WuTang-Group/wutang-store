<?php

use Illuminate\Database\Seeder;

class MemberCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $memberCodes = factory(\App\Models\MemberCode::class)->times(30)->make();
        \App\Models\MemberCode::insert($memberCodes->toArray());
    }
}
