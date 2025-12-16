<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuario', function (Blueprint $table) {
            // ID único del usuario (Primary Key)
            $table->increments('idUsuario'); 

            // Foreign Key hacia la tabla roles (Asegúrate que la tabla 'rol' exista antes)
            $table->unsignedInteger('idRol');
            $table->foreign('idRol')->references('idRol')->on('rol')->onDelete('cascade');

            // Email único
            $table->string('email')->unique();

            // Contraseña
            $table->string('password');

            // Timestamps (created_at y updated_at)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};