<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('idPedido');
            $table->unsignedInteger("usuario");
            $table->unsignedInteger("estadoPedido");
            $table->unsignedInteger("pagoPedido");
            $table->timestamps();
             $table->foreign("usuario")->references("idUsuario")->on("usuarios");
            $table->foreign("estadoPedido")->references("idEstadoPedido")->on("estadoPedidos");
            $table->foreign("pagoPedido")->references("idPagoPedido")->on("pagoPedidos");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
