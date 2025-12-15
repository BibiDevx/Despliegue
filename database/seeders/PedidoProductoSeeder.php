<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pedidoproducto')->truncate(); 

        // Datos del detalle del Pedido 2
        DB::table('pedidoproducto')->insert([
            // Pedido 2 - Producto 2 (SanDisk SSD)
            [
                'idProducto' => 2, 
                'idPedido' => 2, 
                'cantidadProducto' => 1, 
                'valorTotal' => 600000, 
                'created_at' => '2025-06-27 05:23:51', 
                'updated_at' => '2025-06-27 05:23:51'
            ],
            // Pedido 2 - Producto 19 (Monitor Asus)
            [
                'idProducto' => 19, 
                'idPedido' => 2, 
                'cantidadProducto' => 1, 
                'valorTotal' => 1415000, 
                'created_at' => '2025-06-27 05:23:51', 
                'updated_at' => '2025-06-27 05:23:51'
            ],
            // Pedido 2 - Producto 21 (Teclado Logitech)
            [
                'idProducto' => 21, 
                'idPedido' => 2, 
                'cantidadProducto' => 1, 
                'valorTotal' => 155000, 
                'created_at' => '2025-06-27 05:23:51', 
                'updated_at' => '2025-06-27 05:23:51'
            ],
        ]);
    }
}
