<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indexdatas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->LongText('description')->nullable();
            $table->text('project')->nullable();
            $table->text('staff')->nullable();
            $table->text('investment')->nullable();
            $table->text('taxation')->nullable();
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
        Schema::dropIfExists('indexdatas');
    }
}
