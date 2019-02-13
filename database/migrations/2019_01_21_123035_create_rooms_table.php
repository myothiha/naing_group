<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->unsignedInteger('project_id');
            $table->string('name');
            $table->longText('description');
            $table->unsignedInteger('price');
            $table->unsignedInteger('width');
            $table->unsignedInteger('bedroom');
            $table->unsignedInteger('bathroom');
            $table->unsignedInteger('floor');
            $table->string('floor_plan');
            $table->unsignedInteger('status');
            $table->timestamps();

            $table->foreign('project_id')
                ->references('id')->on('projects')
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
        Schema::dropIfExists('rooms');
    }
}
