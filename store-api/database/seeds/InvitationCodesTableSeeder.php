<?php

use Illuminate\Database\Seeder;

class InvitationCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invitationCodes = factory(\App\Models\InvitationCode::class)->times(50)->make();
        \App\Models\InvitationCode::insert($invitationCodes->toArray());
    }
}
