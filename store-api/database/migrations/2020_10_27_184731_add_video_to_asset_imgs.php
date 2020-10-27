<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVideoToAssetImgs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asset_imgs', function (Blueprint $table) {
            $table->string('video')->nullable()->after('img_location')->comment('视频url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asset_imgs', function (Blueprint $table) {
            $table->dropColumn('video');
        });
    }
}
