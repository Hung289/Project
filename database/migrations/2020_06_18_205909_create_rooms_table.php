<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->unique();
            $table->string('location');
            $table->integer('bed');
            $table->tinyInteger('bath');
            $table->integer('area');
            $table->float('priceNight');
            $table->float('priceWeekends');
            $table->float('priceWeekly');
            $table->float('priceClearFee');
            $table->tinyInteger('status');
            $table->string('description');
            $table->tinyInteger('gym');
            $table->tinyInteger('Laundry');
            $table->tinyInteger('tvCable');
            $table->tinyInteger('wifi');
            $table->tinyInteger('FreeParking');
            $table->tinyInteger('Security');
            $table->integer('category_room_id')->unsigned();
            $table->foreign('category_room_id')->references('id')->on('category_rooms')->onDelete('cascade');
            $table->integer('user_room_id')->unsigned();
            $table->foreign('user_room_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('rooms');
    }
}
