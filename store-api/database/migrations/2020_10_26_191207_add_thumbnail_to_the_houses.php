<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddThumbnailToTheHouses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('the_houses', function (Blueprint $table) {
            $table->string('thumbnail')->nullable()->comment('the house 缩略图')->after('the_house_category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('the_houses', function (Blueprint $table) {
            $table->dropColumn('thumbnail');
        });
    }
}
