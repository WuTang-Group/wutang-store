<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductRecommendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_recommends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id')->nullable()->comment('所属商品id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedBigInteger('user_id')->comment('属于用户id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('product_recommends');
    }
}
