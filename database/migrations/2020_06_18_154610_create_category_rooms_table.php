<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->unique();
            $table->string('slug',100)->unique();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('ordering')->default(0);
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('category_rooms');
    }
}
