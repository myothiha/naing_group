<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsrimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csrimages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('csr_id');
            $table->text('image');
            $table->timestamps();

            $table->foreign('csr_id')
                ->references('id')->on('csrs')
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
        Schema::dropIfExists('csrimages');
    }
}
