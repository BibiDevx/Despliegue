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
        Schema::create('admin', function (Blueprint $table) {
    $table->increments('idAdmin');
    $table->unsignedInteger('idUsuario');
    $table->string('cedulaAdmin', 45);
    $table->string('nombreAdmin', 45);
    $table->string('apellidoAdmin', 45);
    $table->string('telefonoAdmin', 15);
    $table->timestamps();

    $table->foreign('idUsuario')->references('idUsuario')->on('users')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
