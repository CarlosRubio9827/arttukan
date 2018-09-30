<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioSistema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ("usuarioSistemas", function (Blueprint $table){

            $table->increments('idUsuarioSistema');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedInteger("idRolSistema");
            $table->foreign("idRolSistema")->references("idRolSistema")->on("rolSistemas");
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
        //
    }
}
