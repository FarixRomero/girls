<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtributosUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atributos_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('advertisement_id');
            $table->foreign('advertisement_id')->references('id')->on('advertisements');
            $table->string('key');
            $table->string('value');
            $table->string('value_fin');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atributos_usuario');
    }
}
