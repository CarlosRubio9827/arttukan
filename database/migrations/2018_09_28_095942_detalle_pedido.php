<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetallePedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallePedidos', function (Blueprint $table) {
            $table->increments('idDetallePedido');
            $table->string("nombreProducto");
            $table->integer("cantidad");
            $table->unsignedInteger("valorPedido");
            $table->unsignedInteger("producto");
            $table->unsignedInteger("pedido");
            $table->timestamps();
            $table->foreign("producto")->references("idProducto")->on("productos");
            $table->foreign("pedido")->references("idPedido")->on("pedidos");
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallePedidos');
    }
}
