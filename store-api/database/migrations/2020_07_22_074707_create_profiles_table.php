<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable()->comment('关联user表');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('real_name')->nullable()->comment('真实姓名');
            $table->integer('sex')->default(1)->comment('性别,1男,0女,-1其他');
            $table->date('birthday')->nullable()->comment('出生年月日');
            $table->string('age')->nullable()->comment('年龄');
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
        Schema::dropIfExists('profiles');
    }
}
