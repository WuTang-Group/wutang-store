<?php

use Illuminate\Database\Seeder;

class AssetImgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = factory(\App\Models\AssetImg::class)->times(10)->make();
        \App\Models\AssetImg::insert($model->toArray());
    }
}
