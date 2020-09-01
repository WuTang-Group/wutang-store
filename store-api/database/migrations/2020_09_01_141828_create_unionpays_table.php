<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnionpaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unionpays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('payment_merchant_id')->nullable()->comment('从属关联payment_merchants表id');
            $table->foreign('payment_merchant_id')->references('id')->on('payment_merchants')->onUpdate('cascade');
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
        Schema::dropIfExists('unionpays');
    }
}
