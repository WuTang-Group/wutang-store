<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlipayBankGatewaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alipay_bank_gateways', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('payment_id')->nullable()->comment('关联从属payments表id');
//            $table->foreign('payment_id')->references('id')->on('payments')->onUpdate('cascade');
            $table->string('merch_id')->comment('商户编号');
            $table->string('product')->comment('产品编号:801,802等');
            $table->string('key')->comment('商户密钥');
            $table->string('return_url')->comment('前端回调URL');
            $table->string('notify_url')->comment('异步回调URL');
            $table->integer('status')->default(-1)->comment('激活状态:1激活，-1未激活');
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
        Schema::dropIfExists('alipay_bank_gateways');
    }
}
