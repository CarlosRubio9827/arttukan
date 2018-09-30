<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Productos', function (Blueprint $table) {
            $table->increments('idProducto');
            $table->string("nombreProducto");
            $table->unsignedInteger("minimo");
            $table->unsignedInteger("precio");
            $table->unsignedInteger("tipoProducto");
            $table->timestamps();
            $table->foreign("tipoProducto")->references("idTipoProducto")->on("tipoProductos");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Productos');
    }
}
