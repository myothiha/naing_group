<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('room_id');
            $table->unsignedInteger('customer_id');            
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('meeting_dates');
            $table->text('dos');
            $table->string('affordable_time');
            $table->string('location');
            $table->timestamps();

            $table->foreign('room_id')
                ->references('id')->on('rooms')
                ->onDelete('cascade');

            $table->foreign('customer_id')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
