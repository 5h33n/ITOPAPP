<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            
            //datos generales
            $table->increments('id_cliente');
            $table->string('usuario')->unique();
            $table->string('nombres');
            $table->string('apaterno');
            $table->string('amaterno');
            $table->unsignedInteger('nControl')->nulleable();
            $table->date('f_nacimiento');
            $table->string('genero');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('foto')->default('defaults/user-default.jpg');
            $table->unsignedInteger('id_papeleria');
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
        Schema::dropIfExists('clientes');
    }
}
