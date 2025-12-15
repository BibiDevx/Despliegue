<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('pedido')->truncate(); 

        // Datos del Pedido
        DB::table('pedido')->insert([
            [
                'idPedido' => 2, 
                'idCliente' => 1, 
                'fechaPedido' => '2025-06-27', 
                'created_at' => '2025-06-27 05:23:51', 
                'updated_at' => '2025-06-27 05:23:51'
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // Ajustamos el AUTO_INCREMENT después del ID 2
        DB::statement('ALTER TABLE pedido AUTO_INCREMENT = 3;');
    }
}
