<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_merchants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type')->nullable()->comment('类别:alipay_legacy_express,unionpay,alipay_bank_gateway,alipay_aop_page等');
            $table->string('return_url')->comment('前端回调URL');
            $table->string('notify_url')->comment('异步回调URL');
            $table->integer('status')->default(1)->comment('状态，1为启用-1为禁用');
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
        Schema::dropIfExists('payment_merchants');
    }
}
