<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('company_id')->nullable()->comment('从属关联companies表id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->string('name')->comment('部门名称');
            $table->string('code')->nullable()->comment('部门编号');
            $table->string('leader')->nullable()->comment('部门负责人');
            $table->integer('parent_id')->default(0)->comment('上级部门id，0为最高级');
            $table->integer('status')->default(1)->comment('状态,1启用，-1未启用');
            $table->text('remark')->nullable()->comment('备注');
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
        Schema::dropIfExists('departments');
    }
}
