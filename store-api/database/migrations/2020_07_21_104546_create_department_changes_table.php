<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentChangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_changes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable()->comment('从属关联users id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('department_id')->nullable()->comment('当前关联部门id');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->unsignedBigInteger('history_department')->nullable()->comment('历史部门id');
            $table->string('remark')->nullable()->comment('备注');
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
        Schema::dropIfExists('department_changes');
    }
}
