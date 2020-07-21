<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttributeLinkIntoCategoryServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_services', function (Blueprint $table) {
            $table->string('banner_service');
            $table->string('link_video_service');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_services', function (Blueprint $table) {
            $table->dropColumn('banner_service');
            $table->dropColumn('link_video_service');
        });
    }
}
