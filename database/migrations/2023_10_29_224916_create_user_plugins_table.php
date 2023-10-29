<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_plugins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('rol',1);
            $table->string('estado',1);
            // Otras columnas si es necesario

            $table->timestamps();

            // Definir la clave foránea hacia la tabla de usuarios (asumiendo que existe una tabla "users")
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_plugins');
    }
};
