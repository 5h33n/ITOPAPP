<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            
            //datos generales
            $table->increments('id_proveedor')->unique();
            $table->string('nombre');
            //AQUÍ NO ESTÁ NORMALIZADO
            $table->string('direccion');
            $table->string('telefono');
            $table->unsignedInteger('id_papeleria');
            $table->string('foto')->default('defaults/proveedor-default.jpg');
            $table->integer('estado')->default('1');
            $table->timestamps();
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
        Schema::dropIfExists('proveedor');
    }
}