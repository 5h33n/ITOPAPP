<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('usuario')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // TIPO 1: CLIENTE // TIPO 2: ADMIN
            $table->integer('tipo');
            $table->rememberToken();
            $table->timestamps();
        });
        
        DB::statement("INSERT INTO `users`(`id`, `usuario`, `email`, `password`, `tipo`) VALUES (1,'Sheen','5h33n@gmail.com','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','1')");
        DB::statement("INSERT INTO `users`(`id`, `usuario`, `email`, `password`, `tipo`) VALUES (2,'ickro123','ickrolko@gmail.com','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','2')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
