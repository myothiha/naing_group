<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description');
            $table->longText('map');
            $table->string('feature_image', 1000);
            $table->string('banner_image', 1000);
            $table->unsignedInteger('project_status_id');
            $table->unsignedInteger('project_type_id');
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('price');
            $table->unsignedInteger('floor');
            $table->unsignedInteger('priority');
            $table->unsignedInteger('layout')->default(4);
            $table->string('file_status')->default(\App\Constant::NO_FILE);
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
        Schema::dropIfExists('projects');
    }
}
