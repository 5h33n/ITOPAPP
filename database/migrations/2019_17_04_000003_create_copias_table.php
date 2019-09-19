<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCopiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copias', function (Blueprint $table) {
            
            //datos generales
            $table->increments('id_copias')->unique();
            $table->string('encargado');
            $table->string('materia')->nullable();
            $table->string('periodo')->nullable();
            $table->string('hora')->nullable();
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
        Schema::dropIfExists('copias');
    }
}