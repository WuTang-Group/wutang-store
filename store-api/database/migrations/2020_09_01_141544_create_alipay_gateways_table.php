<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlipayGatewaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alipay_gateways', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('payment_merchant_id')->nullable()->comment('从属关联payment_merchants表id');
            $table->foreign('payment_merchant_id')->references('id')->on('payment_merchants')->onUpdate('cascade');
            $table->string('merch_id')->comment('商户编号');
            $table->string('product')->comment('产品编号:801,802等');
            $table->string('key')->comment('商户密钥');
            $table->integer('status')->default(1)->comment('激活状态:1激活，-1未激活');
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
        Schema::dropIfExists('alipay_gateways');
    }
}
