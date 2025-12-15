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
        Schema::create('categoriaProducto', function (Blueprint $table) {
    $table->unsignedInteger('idProducto');
    $table->unsignedInteger('idCategoria');

    $table->foreign('idProducto')->references('idProducto')->on('producto')->onDelete('cascade');
    $table->foreign('idCategoria')->references('idCategoria')->on('categoria')->onDelete('cascade');

    $table->primary(['idProducto', 'idCategoria']);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoriaProducto');
    }
};
