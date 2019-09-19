<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrador', function (Blueprint $table) {
            //datos generales
            $table->increments('id_admin');
            $table->string('usuario')->unique();
            $table->string('nombres');
            $table->string('apaterno');
            $table->string('amaterno');
            $table->string('pais');
            $table->string('entidad');
            // FALTAN DATOS DE COBROS PERO NO ESTOY SEGURO CUALES SERÁN
            $table->date('f_nacimiento');
            $table->string('genero');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('foto')->default('defaults/admin-default.jpg');
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
        Schema::dropIfExists('administrador');
    }
}
