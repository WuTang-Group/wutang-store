<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebSeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_seos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable()->comment('seo名称:即meta name');
            $table->text('content')->nullable()->comment('seo值:即meta content');
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
        Schema::dropIfExists('web_seos');
    }
}
