<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTheHouseContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('the_house_contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('the_house_id')->nullable()->comment('从属关联the house id');
            $table->foreign('the_house_id')->references('id')->on('the_houses');
            $table->text('title')->nullable()->comment('文案标题');
            $table->text('content')->nullable()->comment('文案内容');
            $table->string('img')->nullable()->comment('文案配套图片');
            $table->text('img_desc')->nullable()->comment('配套图片简述');
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
        Schema::dropIfExists('the_house_contents');
    }
}
