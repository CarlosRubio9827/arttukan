<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleVentas', function (Blueprint $table) {
            $table->increments('idDetalleVenta');
            $table->string("nombreProducto");
            $table->integer("cantidad");
            $table->unsignedInteger("valorVenta");
            $table->unsignedInteger("producto");
            $table->unsignedInteger("venta");
            $table->foreign("producto")->references("idProducto")->on("productos");
            $table->foreign("venta")->references("idVenta")->on("ventas");
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
        Schema::dropIfExists('detalleVentas');
    }
}
