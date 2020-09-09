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
            $table->unsignedBigInteger('department_id')->nullable()->comment('从属关联departments表id');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->unsignedBigInteger('member_code_id')->nullable()->comment('所属会员码id(可通过会员码查询用户所属会员码)');
            $table->foreign('member_code_id')->references('id')->on('member_codes');
            $table->unsignedBigInteger('password_question_id')->nullable()->comment('关联密保问题id');
            $table->foreign('password_question_id')->references('id')->on('password_questions');
            $table->string('name')->comment('名称');
            $table->string('username')->unique()->comment('用户名:即用户账号');
            $table->string('email')->nullable()->unique()->comment('邮箱');
            $table->timestamp('email_verified_at')->nullable()->comment('邮箱验证时间');
            $table->string('password_answer')->comment('密保问题答案');
            $table->string('phone')->nullable()->unique()->comment('手机号');
            $table->string('password')->comment('密码');
            $table->rememberToken();
            $table->string('avatar')->nullable()->comment('用户头像');
            $table->integer('status')->default(1)->comment('账号状态');
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
