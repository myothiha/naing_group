<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('bucket_key');
            $table->string('object_id');
            $table->string('object_key');
            $table->string('sha1');
            $table->string('size');
            $table->string('content_type');
            $table->string('location');
            $table->string('status')->default(\App\ProjectFile::STATUS_PENDING);
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
        Schema::dropIfExists('project_files');
    }
}
