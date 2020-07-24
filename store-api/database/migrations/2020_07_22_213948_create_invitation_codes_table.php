<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitationCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitation_codes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->comment('邀请码');
            $table->integer('status')->default(1)->comment('启用状态:1可用,-1不可用');
            $table->unsignedBigInteger('user_id')->index()->comment('邀请码制作者');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('usage_limit')->default(999)->comment('使用次数上限');
            $table->unsignedInteger('usage_times')->default(0)->comment('当前使用次数');
            $table->timestamp('valid_until')->comment('有效期至');
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
        Schema::dropIfExists('invitation_codes');
    }
}
