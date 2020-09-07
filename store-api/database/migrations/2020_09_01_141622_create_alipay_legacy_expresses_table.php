<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlipayLegacyExpressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alipay_legacy_expresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pid')->comment('商户id');
            $table->string('key')->comment('商户密钥');
            $table->string('seller_email')->comment('卖家支付宝账号');
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
        Schema::dropIfExists('alipay_legacy_expresses');
    }
}
