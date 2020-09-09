<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('公司名称');
            $table->string('code')->nullable()->comment('公司代码');
            $table->string('type')->nullable()->comment('公司类型');
            $table->string('address')->nullable()->comment('公司地址');
            $table->string('tel_number')->nullable()->comment('联系电话');
            $table->string('contact_person')->nullable()->comment('联系人');
            $table->integer('parent_id')->default(0)->comment('上级公司id，0为最高级');
            $table->integer('level')->nullable()->comment('分级级别');
            $table->integer('status')->default(1)->comment('状态，1为激活，-1为未激活');
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
        Schema::dropIfExists('companies');
    }
}
