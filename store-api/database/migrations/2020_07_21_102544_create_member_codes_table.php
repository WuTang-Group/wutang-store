<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_codes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->comment('会员码');
            $table->string('user_name')->nullable()->comment('会员码所属用户的姓名');
            $table->integer('parent_id')->default(0)->comment('会员码上级,0为最高级');
            $table->integer('status')->default(1)->comment('状态:1启用,-1未启用');
            $table->text('remark')->nullable()->comment('其他说明');
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
        Schema::dropIfExists('member_codes');
    }
}
