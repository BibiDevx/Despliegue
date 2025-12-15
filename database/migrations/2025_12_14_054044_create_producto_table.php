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
        Schema::create('producto', function (Blueprint $table) {
    $table->increments('idProducto');
    $table->string('nombreProducto', 100);
    $table->text('definicion');
    $table->unsignedInteger('idMarca');
    $table->unsignedInteger('idProveedor');
    $table->integer('valorProducto');
    $table->boolean('disponibilidad');
    $table->integer('cantidadStock');
    $table->timestamps();

    $table->foreign('idMarca')->references('idMarca')->on('marca');
    $table->foreign('idProveedor')->references('idProveedor')->on('proveedor');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
