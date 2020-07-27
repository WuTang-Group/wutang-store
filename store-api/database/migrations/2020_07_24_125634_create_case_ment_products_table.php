<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseMentProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_ment_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('套盒名称');
            $table->string('banner_img')->nullable()->comment('banner图');
            $table->text('banner_text')->nullable()->comment('banner部分文本');
            $table->decimal('price',10,2)->nullable()->comment('套盒价格');
            $table->unsignedInteger('stock')->comment('套盒库存');
            $table->text('case_ment_benifit')->nullable()->comment('套盒功效');
            $table->text('case_ment_advantage')->nullable()->comment('套盒优点');
            $table->string('main_img')->nullable()->comment('套盒内容介绍主图');
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
        Schema::dropIfExists('case_ment_products');
    }
}
