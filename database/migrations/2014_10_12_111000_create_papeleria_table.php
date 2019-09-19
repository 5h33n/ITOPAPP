<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapeleriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papeleria', function (Blueprint $table) {
            //datos generales
            $table->increments('id_papeleria');
            $table->string('nombre')->unique();
            $table->string('about');
            $table->string('detonadora');
            $table->string('mision');
            $table->string('vision');
            $table->string('correo')->nulleable();
            $table->string('telefono');
            $table->string('direccion');
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('otra')->nullable();
            $table->string('historia')->nullable();
            $table->string('valores')->nullable();
            $table->unsignedInteger('id_admin');
            $table->string('logo')->default('defaults/logodefault.png');
            $table->integer('estado')->default('1');
            $table->timestamps();
            
            $table->foreign('id_admin')->references('id_admin')->on('administrador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papaleria');
    }
}
