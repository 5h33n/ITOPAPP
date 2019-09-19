<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpresionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impresion', function (Blueprint $table) {
            
            //datos generales
            $table->increments('id_impresion')->unique();
            $table->unsignedInteger('id_copias')->nullable();
            $table->unsignedInteger('id_archivo')->nullable();
            $table->string('engargolado')->default('0');
            $table->string('colorpasta')->default('Sin pasta');
            $table->timestamps();
            
            $table->foreign('id_copias')->references('id_copias')->on('copias');
            $table->foreign('id_archivo')->references('id_archivo')->on('archivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('impresion');
    }
}