<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracion', function (Blueprint $table) {
            
            //datos generales
            $table->increments('id_config');
            $table->string('clave');
            $table->string('valor');
            //Si corresponde a la app o al sitio web
            $table->string('correspondencia');
            $table->unsignedInteger('id_papeleria');
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
        Schema::dropIfExists('configuracion');
    }
}
