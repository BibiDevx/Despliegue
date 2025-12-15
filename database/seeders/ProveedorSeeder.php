<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proveedor')->truncate(); 

        // Datos del Proveedor
        DB::table('proveedor')->insert([
            [
                'idProveedor' => 1, 
                'nombreProveedor' => 'PC SYSTEMS', 
                'emailProveedor' => 'pcsystems@gmail.com', 
                'telefonoProveedor' => '43256442', 
                'created_at' => '2025-04-03 18:24:30', 
                'updated_at' => '2025-04-03 18:24:30'
            ],
        ]);
        
        // Ajustamos el AUTO_INCREMENT después del ID 1
        DB::statement('ALTER TABLE proveedor AUTO_INCREMENT = 2;');
    }
}
