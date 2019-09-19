<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivo', function (Blueprint $table) {
            
            //datos generales
            $table->increments('id_archivo')->unique();
            //Quien lo subió para imprimir
            $table->string('impresor');
            $table->string('descripcion');
            $table->string('periodo')->nullable();
            $table->unsignedInteger('id_medio');
            $table->timestamps();
            $table->foreign('id_medio')->references('id_medio')->on('medio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivo');
    }
}