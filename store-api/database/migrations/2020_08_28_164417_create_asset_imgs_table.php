<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_imgs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img')->comment('图片url');
            $table->integer('img_location')->comment('图片位置如1|参照AssetImgLocation枚举类');
            $table->string('type')->comment('类型如:banner,discover|参照AssetImgType枚举类');
            $table->unsignedBigInteger('product_id')->nullable()->comment('关联的产品id');
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
        Schema::dropIfExists('asset_imgs');
    }
}
