<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_stories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('case_ment_product_id')->nullable()->comment('所属套盒id');
            $table->string('title')->comment('故事标题');
            $table->text('content')->comment('故事标题对应内容');
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
        Schema::dropIfExists('product_stories');
    }
}
