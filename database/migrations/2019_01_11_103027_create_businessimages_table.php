<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businessimages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('business_id');
            $table->text('image');
            $table->timestamps();

            $table->foreign('business_id')
                ->references('id')->on('businesses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businessimages');
    }
}
