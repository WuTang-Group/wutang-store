<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoryStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_category_stories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_category_id')->nullable()->comment('所属产品分类id');
            $table->foreign('product_category_id')->references('id')->on('product_categories');
            $table->string('title')->nullable()->comment('分类故事名称');
            $table->string('title_en')->nullable()->comment('英文故事名称');
            $table->text('description')->nullable()->comment('分类简介');
            $table->string('description_en')->nullable()->comment('英文分类简介');
            $table->string('banner')->nullable()->comment('故事banner');
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
        Schema::dropIfExists('product_category_stories');
    }
}
