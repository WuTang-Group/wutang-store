<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkinCareStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skin_care_steps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id')->nullable()->comment('所关联从属商品ID');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedBigInteger('step_first')->index()->nullable()->comment('步骤1关联产品');
            $table->unsignedBigInteger('step_second')->index()->nullable()->comment('步骤2关联产品');
            $table->unsignedBigInteger('step_third')->index()->nullable()->comment('步骤3关联产品');
            $table->integer('status')->default(1)->comment('1表示推荐，0表示自选');
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
        Schema::dropIfExists('skin_care_steps');
    }
}
