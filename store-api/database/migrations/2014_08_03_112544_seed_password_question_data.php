<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class SeedPasswordQuestionData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $questions = [
            ['question'=>'您的学号(或工号)是'],
            ['question'=>'您父亲的姓名是'],
            ['question'=>'您母亲的姓名是'],
            ['question'=>'您配偶的姓名是'],
            ['question'=>'您初中班主任的姓名是'],
            ['question'=>'您最熟悉的童年好友姓名是'],
            ['question'=>'对您影响最大的人是'],
            ['question'=>'您的小学毕业于']
        ];
        //\App\Models\PasswordQuestion::create($questions);
        DB::table('password_questions')->insert($questions);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
