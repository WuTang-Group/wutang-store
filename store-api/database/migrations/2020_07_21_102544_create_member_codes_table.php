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
            $table->unsignedBigInteger('user_id')->nullable()->comment('会员码所属users表id');
            $table->integer('parent_id')->default(0)->comment('会员码上级,0表示无(parent_id为0且level为0表示普通用户,parent_id为0且level为1表示最高级)');
            $table->integer('level')->default(0)->comment('分级级别;默认为0无层级(个人申请的无层级),1最高级,依此类推');
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
