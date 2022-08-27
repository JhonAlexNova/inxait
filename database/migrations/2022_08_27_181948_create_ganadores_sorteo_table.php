<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGanadoresSorteoTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ganadores_sorteo', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('usuario_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('usuario_id')->references('id')->on('usuarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ganadores_sorteo');
    }
}
