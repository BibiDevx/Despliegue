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
        Schema::create('pedidoproducto', function (Blueprint $table) {
    $table->unsignedInteger('idPedido');
    $table->unsignedInteger('idProducto');
    $table->integer('cantidadProducto');
    $table->integer('valorTotal');
    $table->timestamps();

    $table->foreign('idPedido')->references('idPedido')->on('pedido')->onDelete('cascade');
    $table->foreign('idProducto')->references('idProducto')->on('producto');

    $table->primary(['idPedido', 'idProducto']);
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidoProducto');
    }
};
