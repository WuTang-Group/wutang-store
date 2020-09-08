<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTheHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('the_houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('the_house_category_id')->nullable()->comment('从属关联the_house_category表id');
            $table->foreign('the_house_category_id')->references('id')->on('the_house_categories');
            $table->string('banner')->nullable()->comment('the house banner图');
            $table->text('title')->nullable()->comment('文案大标题');
            $table->text('sub_title')->nullable()->comment('文案副标题');
            $table->text('describe')->nullable()->comment('简要描述，首字变大');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('the_houses');
    }
}
