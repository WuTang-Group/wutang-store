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

        $this->call(CompaniesTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(MemberCodesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserAddressTableSeeder::class);
        $this->call(UserProfileTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(ProductCategoryStoriesTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ProductSkuTableSeeder::class);
        $this->call(ShopCartTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderItemTableSeeder::class);
        $this->call(UserWishListTableSeeder::class);
        $this->call(TheHouseCategoriesTableSeeder::class);
        $this->call(TheHousesTableSeeder::class);
        $this->call(TheHouseContentsTableSeeder::class);
        $this->call(AssetImgTableSeeder::class);

        Model::reguard();
    }
}
