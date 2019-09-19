<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compra', function (Blueprint $table) {
            // CREAR LA TABLA DETALLE COMPRA Y ASIGNARLE EL ID_COMPRA COMO LLAVE FORANEA,
            //ESA TABLA VA A TENER COMO LLAVE FORANEA AL PRODUCTO
            //datos generales
            $table->unsignedInteger('id_compra');
            $table->unsignedInteger('id_producto');
            $table->decimal('precio', 8, 2);
            $table->string('cantidad');
            $table->decimal('total', 8, 2);
            //ESTADOS: comprado, listo, recogido
            $table->string('estado')->default("comprado");
            $table->timestamps();
            
            $table->foreign('id_compra')->references('id_compra')->on('compra');
            $table->foreign('id_producto')->references('id_producto')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_compra');
    }
}