<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedCompanyDepartments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $companie = \App\Models\Company::create([
            'name' => '深圳市无糖实业集团'
        ]);
        \App\Models\Department::create([
            'company_id' => $companie->id,
            'name' => '设计部'
        ]);
        \App\Models\Department::create([
            'company_id' => $companie->id,
            'name' => '研发技术部'
        ]);
        \App\Models\Department::create([
            'company_id' => $companie->id,
            'name' => '数据部'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
