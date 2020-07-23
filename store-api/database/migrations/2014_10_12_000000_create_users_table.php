<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('名称');
            $table->string('email')->nullable()->unique()->comment('邮箱');
            $table->timestamp('email_verified_at')->nullable()->comment('邮箱验证时间');
            $table->string('phone')->nullable()->unique()->comment('手机号');
            $table->string('password')->comment('密码');
            $table->rememberToken();
            $table->string('invitation_code')->comment('用户被邀请的邀请码');
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
        Schema::dropIfExists('users');
    }
}
