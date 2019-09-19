<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusquedasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('busquedas', function (Blueprint $table) {
            
            //datos generales
            $table->increments('id_busqueda')->unique();
            $table->string('buscado');
            $table->date('fecha');
            $table->unsignedInteger('id_papeleria');
            
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
        Schema::dropIfExists('busquedas');
    }
}