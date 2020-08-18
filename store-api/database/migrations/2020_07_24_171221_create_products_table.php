<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_category_id')->nullable()->comment('所属产品分类id');
            $table->foreign('product_category_id')->references('id')->on('product_categories');
            $table->string('product_name')->comment('商品名称');
            $table->string('product_name_en')->comment('商品英文名称');
            $table->string('thumbnail')->nullable()->comment('产品缩略图');
            $table->string('slug')->index()->nullable()->comment('导航名称:即url');
            $table->text('short_description')->nullable()->comment('简短介绍');
            $table->text('short_description_en')->nullable()->comment('英文简短介绍');
            $table->decimal('price', 10, 2)->comment('价格');
            $table->decimal('sale_price',10,2)->comment('优惠价');
            $table->unsignedBigInteger('stock')->comment('库存量');
            $table->string('spec')->nullable()->comment('商品规格');
            $table->string('seo_title')->nullable()->comment('网页title');
            $table->string('seo_keyword')->nullable()->comment('网页关键字');
            $table->string('seo_description')->nullable()->comment('网页描述');
            $table->text('benefit')->nullable()->comment('产品功效');
            $table->text('benefit_en')->nullable()->comment('英文产品功效');
            $table->text('tech_description')->nullable()->comment('科技介绍');
            $table->text('tech_description_en')->nullable()->comment('英文科技介绍');
            $table->text('description')->nullable()->comment('产品细节');
            $table->text('description_en')->nullable()->comment('英文产品细节');
            $table->text('usage')->nullable()->comment('使用方法');
            $table->text('usage_en')->nullable()->comment('英文使用方法');
            $table->string('main_image')->comment('页面主图');
            $table->string('main_image_2')->comment('页面主图2:用于较低分辨率设备');
            $table->string('benefit_image')->nullable()->comment('功效背景图');
            $table->string('product_video')->nullable()->comment('产品相关视频');
            $table->integer('status')->default(1)->comment('商品状态：1新品，2其他');
            $table->float('rating')->default(5)->comment('商品平均评分');
            $table->unsignedInteger('sold_count')->default(0)->comment('销量');
            $table->unsignedInteger('review_count')->default(0)->comment('评价数量');
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
        Schema::dropIfExists('products');
    }
}
