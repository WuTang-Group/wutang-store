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
        $this->call(UserAddressTableSeeder::class);
        $this->call(UserProfileTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ProductSkuTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(CategoryStoryTableSeeder::class);
        $this->call(ShopCartTableSeeder::class);

        Model::reguard();
    }
}
