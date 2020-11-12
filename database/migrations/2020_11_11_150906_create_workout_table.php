<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('name', 128); este campo se agregará cuando este completo el funcionamiento de varios ejercicios
            $table->date('initial_date');
            $table->date('end_date');
            /*
            $table->integer('id_assignment')->unsigned();
            $table->foreign('id_assignment')->references('id')->on('assignment');
            */
            $table->integer('id_exercise')->unsigned();
            $table->foreign('id_exercise')->references('id')->on('exercise');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->tinyInteger('active')->default(1);
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
        Schema::dropIfExists('workout');
    }
}
