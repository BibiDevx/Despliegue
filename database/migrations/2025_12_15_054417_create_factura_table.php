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
        Schema::create('factura', function (Blueprint $table) {
    $table->increments('idFactura');
    $table->unsignedInteger('idPedido');
    $table->string('metodoPago', 55);
    $table->date('fechaFactura');
    $table->timestamps();

    $table->foreign('idPedido')->references('idPedido')->on('pedido');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factura');
    }
};
