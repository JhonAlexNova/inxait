<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ciudad_id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('celular');
            $table->string('correo');
            $table->enum('habeas_data',['0','1'] )->default('0');
            $table->softDeletes();
            $table->timestamps();
            //
            $table->foreign('ciudad_id')->references('id')->on('ciudades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}
