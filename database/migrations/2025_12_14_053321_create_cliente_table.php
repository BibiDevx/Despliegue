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
        Schema::create('cliente', function (Blueprint $table) {
    $table->increments('idCliente');
    $table->unsignedInteger('idUsuario');
    $table->string('cedulaCliente', 20);
    $table->string('nombreCliente', 45);
    $table->string('apellidoCliente', 45);
    $table->string('telefonoCliente', 15);
    $table->string('direccion', 255);
    $table->timestamps();

    $table->foreign('idUsuario')->references('idUsuario')->on('usuario')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
