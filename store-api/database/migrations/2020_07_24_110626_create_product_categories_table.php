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
            $table->string('name')->comment('分类名称');
            $table->string('slug')->index()->nullable()->comment('分类slug');
            $table->string('thumbnail')->nullable()->comment('分类缩略图(显示于系列概述处)');
            $table->string('banner')->nullable()->comment('分类banner图(显示于分类介绍顶部)');
            $table->string('title')->nullable()->comment('分类介绍标题');
            $table->string('title_en')->nullable()->comment('分类英文标题');
            $table->string('sub_title')->nullable()->comment('分类副标题');
            $table->text('describe')->nullable()->comment('分类描述');
            $table->text('describe_en')->nullable()->comment('分类英文描述');
            $table->text('describe_img')->nullable()->comment('分类描述图(显示于中下描述位置,与描述匹配)');
            $table->unsignedBigInteger('parent_id')->default(0)->comment('分类从属关系,0为默认一级分类');
            $table->integer('level')->default(1)->comment('分类级别');
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
