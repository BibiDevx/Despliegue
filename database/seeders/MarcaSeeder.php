<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('marca')->truncate(); 

        // Datos de Marcas
        DB::table('marca')->insert([
            // ID 1
            ['idMarca' => 1, 'nombreMarca' => 'ASUS', 'created_at' => '2025-04-03 18:24:48', 'updated_at' => '2025-06-05 05:52:01'],
            // ID 2
            ['idMarca' => 2, 'nombreMarca' => 'MSI', 'created_at' => '2025-04-17 02:07:55', 'updated_at' => '2025-04-17 02:07:55'],
            // ID 3
            ['idMarca' => 3, 'nombreMarca' => 'GIGABYTE', 'created_at' => '2025-04-17 02:07:55', 'updated_at' => '2025-04-17 02:07:55'],
            // ID 4
            ['idMarca' => 4, 'nombreMarca' => 'CORSAIR', 'created_at' => '2025-04-17 02:10:15', 'updated_at' => '2025-04-17 02:10:15'],
            // ID 5
            ['idMarca' => 5, 'nombreMarca' => 'KINGSTON', 'created_at' => '2025-04-17 02:10:15', 'updated_at' => '2025-04-17 02:10:15'],
            // ID 6
            ['idMarca' => 6, 'nombreMarca' => 'LG', 'created_at' => '2025-04-17 02:11:52', 'updated_at' => '2025-04-17 02:11:52'],
            // ID 7
            ['idMarca' => 7, 'nombreMarca' => 'ACER', 'created_at' => '2025-04-17 02:11:52', 'updated_at' => '2025-04-17 02:11:52'],
            // ID 8
            ['idMarca' => 8, 'nombreMarca' => 'LOGITECH', 'created_at' => '2025-04-17 02:13:48', 'updated_at' => '2025-04-17 02:13:48'],
            // ID 9
            ['idMarca' => 9, 'nombreMarca' => 'REDRAGON', 'created_at' => '2025-04-17 02:13:48', 'updated_at' => '2025-04-17 02:13:48'],
            // ID 10
            ['idMarca' => 10, 'nombreMarca' => 'TRUST', 'created_at' => '2025-04-17 02:15:12', 'updated_at' => '2025-04-17 02:15:12'],
            // ID 11
            ['idMarca' => 11, 'nombreMarca' => 'NVIDIA', 'created_at' => '2025-04-17 02:15:12', 'updated_at' => '2025-04-17 02:15:12'],
            // ID 12
            ['idMarca' => 12, 'nombreMarca' => 'THERMALTAKE', 'created_at' => '2025-04-17 02:16:02', 'updated_at' => '2025-04-17 02:16:02'],
            // ID 13
            ['idMarca' => 13, 'nombreMarca' => 'INTEL', 'created_at' => '2025-04-17 02:22:29', 'updated_at' => '2025-04-17 02:22:29'],
            // ID 14
            ['idMarca' => 14, 'nombreMarca' => 'AMD', 'created_at' => '2025-04-17 02:22:29', 'updated_at' => '2025-04-17 02:22:29'],
            // ID 15
            ['idMarca' => 15, 'nombreMarca' => 'XPG', 'created_at' => '2025-04-17 02:27:34', 'updated_at' => '2025-04-17 02:27:34'],
            // ID 16
            ['idMarca' => 16, 'nombreMarca' => 'DELL', 'created_at' => '2025-04-17 02:27:34', 'updated_at' => '2025-04-17 02:27:34'],
            // ID 17
            ['idMarca' => 17, 'nombreMarca' => 'SanDisk ', 'created_at' => '2025-04-17 02:32:46', 'updated_at' => '2025-04-17 02:32:46'],
        ]);
        
        // Ajustamos el AUTO_INCREMENT después del ID 17
        DB::statement('ALTER TABLE marca AUTO_INCREMENT = 18;');
    }
}
