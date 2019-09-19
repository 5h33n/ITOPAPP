<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            // CREAR LA TABLA DETALLE COMPRA Y ASIGNARLE EL ID_COMPRA COMO LLAVE FORANEA,
            //ESA TABLA VA A TENER COMO LLAVE FORANEA AL PRODUCTO
            //datos generales
            $table->increments('id_compra')->unique();  
            $table->string('folio_compra');
            $table->unsignedInteger('id_cliente');
            $table->date('fecha_pagado');
            $table->decimal('total_compra', 8, 2);
            $table->integer('recibido')->default('0');
            $table->timestamps();
            
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra');
    }
}