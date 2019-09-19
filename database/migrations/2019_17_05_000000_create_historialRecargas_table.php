<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialRecargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialRecargas', function (Blueprint $table) {
            
            //datos generales
            $table->increments('id_recarga')->unique();
            $table->string('folio');
            $table->decimal('monto',8,2);
            $table->date('fecha');
            $table->unsignedInteger('id_cliente');
            
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
        Schema::dropIfExists('historialRecargas');
    }
}