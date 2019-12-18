<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title');
            $table->string('description');
            $table->string('severity',1);

            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->bigInteger('project_id')->unsigned()->nullable();
            $table->foreign('project_id')->references('id')->on('projects');


            $table->bigInteger('level_id')->unsigned()->nullable();
            $table->foreign('level_id')->references('id')->on('levels');

            $table->bigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('users');

            $table->bigInteger('support_id')->unsigned()->nullable();
            $table->foreign('support_id')->references('id')->on('users');



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
        Schema::dropIfExists('incidents');
    }
}
