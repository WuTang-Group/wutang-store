<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no')->unique()->comment('订单号');
            $table->unsignedBigInteger('user_id')->comment('属于用户id');
            $table->foreign('user_id')->references('id')->on('users');
            // $table->text('address')->comment('JSON格式收货地址');
            $table->unsignedBigInteger('user_address_id')->nullable()->comment('关联地址表id');
            $table->decimal('total_amount',10,2)->comment('订单总金额');
            $table->text('remark')->nullable()->comment('订单备注');
            $table->dateTime('paid_at')->nullable()->comment('支付时间');
            $table->string('payment_method')->nullable()->comment('支付方式');
            $table->string('payment_no')->nullable()->comment('支付平台订单号(交易单号)');
            $table->integer('status')->default(0)->comment('订单状态:1已付款,0未付款,-1付款失败,-2取消订单');
            $table->integer('refund_status')->default(1)->comment('退款状态:1未退款,-1已退款');
            $table->string('refund_no')->unique()->nullable()->comment('退款单号');
            $table->boolean('closed')->default(false)->comment('订单是否已关闭');
            $table->boolean('reviewed')->default(false)->comment('订单是否已评价');
            $table->integer('ship_status')->default(-1)->comment('物流状态:-1未发货，1已发货,0已签收');
            $table->text('ship_data')->nullable()->comment('物流数据');
            $table->text('extra')->nullable()->comment('其他额外数据');
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
        Schema::dropIfExists('orders');
    }
}
