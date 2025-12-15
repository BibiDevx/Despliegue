<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('factura')->truncate(); 

        // Datos de la Factura
        DB::table('factura')->insert([
            [
                'idfactura' => 1, 
                'idPedido' => 2, 
                'metodoPago' => 'Tarjeta de Crédito', 
                'fechaFactura' => '2025-06-27', 
                'created_at' => '2025-06-27 05:23:51', 
                'updated_at' => '2025-06-27 05:23:51'
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // Ajustamos el AUTO_INCREMENT después del ID 1
        DB::statement('ALTER TABLE factura AUTO_INCREMENT = 2;');
    }
}
