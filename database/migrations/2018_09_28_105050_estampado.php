<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estampado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estampados', function (Blueprint $table) {
            $table->increments('id');
            $table->string("imagen");
            $table->string("textoCamisa");
            $table->unsignedInteger("usuario");
            $table->unsignedInteger("colorCamisa");
            $table->unsignedInteger("tipoCamisa");
            $table->unsignedInteger("disenoEstampado");
            $table->unsignedInteger("tallaCamisa");
            $table->unsignedInteger("pagoPedido");
            $table->unsignedInteger("estadoPedido");
            $table->foreign("usuario")->references("idUsuario")->on("usuarios");
            $table->foreign("colorCamisa")->references("idColorCamisa")->on("colorCamisas");
            $table->foreign("tipoCamisa")->references("idTipoCamisa")->on("tipoCamisas");
            $table->foreign("disenoEstampado")->references("idDisenoEstampado")->on("disenoEstampados");
            $table->foreign("tallaCamisa")->references("idTallaCamisa")->on("tallaCamisas");
            $table->foreign("pagoPedido")->references("idPagoPedido")->on("pagoPedidos");
            $table->foreign("estadoPedido")->references("idEstadoPedido")->on("estadoPedidos");
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
        Schema::dropIfExists('estampados');
    }
}

