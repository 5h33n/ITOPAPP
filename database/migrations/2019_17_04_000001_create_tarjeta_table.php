<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarjetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjeta', function (Blueprint $table) {
            
            //datos generales
            $table->increments('id_tarjeta');
            $table->string('folio');
             $table->decimal('credito', 8, 2);
            $table->date('f_exp');
             $table->date('ultima_recarga')->nullable();
             $table->unsignedInteger('id_cliente');
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
           
            $table->integer('estado')->default('1');
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
        Schema::dropIfExists('tarjeta');
    }
}
