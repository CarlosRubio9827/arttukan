<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('idUsuario');
            $table->string('primerNombre');
            $table->string('segundoNombre')->nullable($value = true);
            $table->string('primerApellido');
            $table->string('segundoApellido');
            $table->string("telefono");
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedInteger("id_ciudad");
            $table->unsignedInteger("id_departamento");
            $table->foreign('id_ciudad')->references('id')->on('ciudades');
            $table->foreign('id_departamento')->references('id')->on('departamentos');
            $table->rememberToken();
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
      Schema::dropIfExists('usuarios');
    }
    
}
