<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            
            //datos generales
            $table->increments('id_oferta')->unique();
            $table->unsignedInteger('id_producto');
            $table->unsignedInteger('id_papeleria');
            $table->string('n_oferta');
            //2x1 3x2 descuentoporcentaje descuentopesos
            $table->string('descripcion');
            $table->unsignedInteger('descuento')->nullable();
            $table->string('foto')->default('defaults/oferta-default.png');
            $table->integer('estado')->default('1');
            $table->timestamps();
            
            $table->foreign('id_producto')->references('id_producto')->on('producto');
            $table->foreign('id_papeleria')->references('id_papeleria')->on('papeleria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
}