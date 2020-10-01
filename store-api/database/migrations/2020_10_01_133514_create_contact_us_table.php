<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable()->comment('从属用户id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name')->nullable()->comment('用户称谓');
            $table->integer('type')->default(2)->comment('留言类型,参照ContactUsType枚举类.默认为一般咨询');
            $table->string('order_no')->nullable()->comment('订单编号');
            $table->text('content')->nullable()->comment('具体内容');
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
        Schema::dropIfExists('contact_us');
    }
}
