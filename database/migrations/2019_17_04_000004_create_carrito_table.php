<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito', function (Blueprint $table) {
            // CREAR LA TABLA DETALLE COMPRA Y ASIGNARLE EL ID_COMPRA COMO LLAVE FORANEA,
            //ESA TABLA VA A TENER COMO LLAVE FORANEA AL PRODUCTO
            //datos generales
            $table->unsignedInteger('id_cliente');
            $table->unsignedInteger('id_producto')->nullable();
            $table->unsignedInteger('id_copias')->nullable();
            $table->unsignedInteger('id_archivo')->nullable();
            $table->decimal('precio', 8, 2);
            $table->string('cantidad');
            $table->decimal('total', 8, 2);
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
            $table->foreign('id_producto')->references('id_producto')->on('producto');
            $table->foreign('id_copias')->references('id_copias')->on('copias');
            $table->foreign('id_archivo')->references('id_archivo')->on('archivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrito');
    }
}