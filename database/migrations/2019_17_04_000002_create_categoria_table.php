<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria', function (Blueprint $table) {
            
            //datos generales
            $table->increments('id_categoria')->unique();
            $table->string('nombre');
            $table->string('descripcion');
            $table->unsignedInteger('id_papeleria');
            $table->string('foto')->default('defaults/categoria-default.jpg');
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
        Schema::dropIfExists('categoria');
    }
}