<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(InvitationCodesTableSeeder::class);
        $this->call(UserAddressTableSeeder::class);
        $this->call(UserProfileTableSeeder::class);

        Model::reguard();
    }
}
