<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnionpaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unionpays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('return_url')->comment('前端回调URL');
            $table->string('notify_url')->comment('异步回调URL');
            $table->integer('status')->default(1)->comment('激活状态:1激活，-1未激活');
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
        Schema::dropIfExists('unionpays');
    }
}
