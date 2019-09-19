<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            
            //datos generales
            $table->increments('id_producto')->unique();
            $table->string('n_producto');
            $table->string('descripcion');
            $table->decimal('precio_unitario', 8, 2);
            $table->unsignedInteger('cantidad');
            $table->unsignedInteger('id_subcategoria');
            $table->foreign('id_subcategoria')->references('id_subcategoria')->on('subcategoria');
            $table->unsignedInteger('id_proveedor');
            $table->string('color');
            $table->string('modelo');
            $table->string('marca');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->string('foto4');
            $table->string('calificacion')->default('0');
            $table->string('n_valoraciones')->default('0');
            $table->integer('estado')->default('1');
            $table->timestamps();
            
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}