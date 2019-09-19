<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medio', function (Blueprint $table) {
            
            //datos generales
            $table->increments('id_medio')->unique();
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('cantidad_hojas');
            //ESTE NO TIENE DEFAULT PORQUE SE TIENE QUE SUBIR UNA IMAGEN A HUEVO
            $table->string('foto');
            $table->string('estado')->default('1');
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
        Schema::dropIfExists('medio');
    }
}