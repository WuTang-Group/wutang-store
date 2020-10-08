<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnionPayGatewaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('union_pay_gateways', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('payment_id')->nullable()->comment('关联从属payments表id');
            $table->string('cpid')->nullable()->comment('CP标识');
            $table->integer('pay_type')->nullable()->comment('支付方式');
            $table->string('jump_url')->nullable()->comment('前端跳转地址');
            $table->string('notify_url')->nullable()->comment('异步通知地址');
            $table->integer('status')->default(-1)->comment('状态,1激活:-1未激活');
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
        Schema::dropIfExists('union_pay_gateways');
    }
}
