<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategoria', function (Blueprint $table) {
            
            //datos generales
            $table->increments('id_subcategoria')->unique();
            $table->unsignedInteger('id_padre')->nullable();
            $table->string('nombre');
            $table->string('descripcion');
            $table->unsignedInteger('id_categoria')->nullable();
            $table->foreign('id_categoria')->references('id_categoria')->on('categoria');
            $table->foreign('id_padre')->references('id_subcategoria')->on('subcategoria');
            $table->string('foto')->default('defaults/subcategoria-default.png');
            $table->integer('estado')->default('1');
            $table->timestamps();
           
        });
        DB::statement('ALTER TABLE subcategoria AUTO_INCREMENT = 100');
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategoria');
    }
}