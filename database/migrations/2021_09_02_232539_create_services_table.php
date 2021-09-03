<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('telofono');
            $table->string('titulo');
            $table->string('texto');
            $table->string('nombre')->nullable();
            $table->unsignedInteger('edad')->nullable();
            $table->string('twitter')->nullable();
            $table->boolean('is_independiente');
            $table->float('tarifa_hora')->nullable();
            $table->string('horario');
            // $table->string('horario');
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
        Schema::dropIfExists('services');
    }
}
