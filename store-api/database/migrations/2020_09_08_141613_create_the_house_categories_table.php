<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTheHouseCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('the_house_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('The house 分类名称');
            $table->string('slug')->comment('slug');
            $table->string('banner')->nullable()->comment('分类banner图');
            $table->text('title')->nullable()->comment('banner处标题');
            $table->text('sub_title')->nullable()->comment('banner处副标题');
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
        Schema::dropIfExists('the_house_categories');
    }
}
