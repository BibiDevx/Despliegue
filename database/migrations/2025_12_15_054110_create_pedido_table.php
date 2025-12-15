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
        Schema::create('pedido', function (Blueprint $table) {
    $table->increments('idPedido');
    $table->unsignedInteger('idCliente');
    $table->date('fechaPedido');
    $table->timestamps();

    $table->foreign('idCliente')->references('idCliente')->on('cliente');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido');
    }
};
