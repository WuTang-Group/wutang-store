<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable()->comment('分类名称');
            $table->string('title_en')->nullable()->comment('英文分类名称');
            $table->text('describe')->nullable()->comment('分类描述');
            $table->text('describe_en')->nullable()->comment('英文分类描述');
            $table->string('banner')->nullable()->comment('分类banner图');
            $table->text('description')->nullable()->comment('分类简介');
            $table->text('description_en')->nullable()->comment('英文分类简介');
            $table->string('img')->nullable()->comment('分类简介图');
            $table->unsignedBigInteger('parent_id')->nullable()->comment('分类上级');
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
        Schema::dropIfExists('product_categories');
    }
}
