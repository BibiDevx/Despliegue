<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categoria')->truncate(); 

        // Datos de Categorías (componentes de PC)
        DB::table('categoria')->insert([
            // ID 1
            ['idCategoria' => 1, 'nombreCategoria' => 'BOARDS', 'created_at' => '2025-04-03 18:23:05', 'updated_at' => '2025-04-17 02:19:44'],
            // ID 2
            ['idCategoria' => 2, 'nombreCategoria' => 'MEMORIA RAM', 'created_at' => '2025-04-17 02:17:53', 'updated_at' => '2025-04-17 02:17:53'],
            // ID 3
            ['idCategoria' => 3, 'nombreCategoria' => 'ALMACENAMIENTO', 'created_at' => '2025-04-17 02:17:53', 'updated_at' => '2025-04-17 02:17:53'],
            // ID 4
            ['idCategoria' => 4, 'nombreCategoria' => 'TARJETA GRAFICA', 'created_at' => '2025-04-17 02:17:53', 'updated_at' => '2025-04-17 02:17:53'],
            // ID 5
            ['idCategoria' => 5, 'nombreCategoria' => 'MONITORES', 'created_at' => '2025-04-17 02:17:53', 'updated_at' => '2025-04-17 02:17:53'],
            // ID 6
            ['idCategoria' => 6, 'nombreCategoria' => 'PERIFERICOS', 'created_at' => '2025-04-17 02:17:53', 'updated_at' => '2025-04-17 02:17:53'],
            // ID 7
            ['idCategoria' => 7, 'nombreCategoria' => 'PROCESADORES', 'created_at' => '2025-04-17 02:19:32', 'updated_at' => '2025-04-17 02:19:32'],
            // ID 8
            ['idCategoria' => 8, 'nombreCategoria' => 'FUENTES', 'created_at' => '2025-04-17 02:19:32', 'updated_at' => '2025-04-17 02:19:32'],
            // ID 9
            ['idCategoria' => 9, 'nombreCategoria' => 'TECLADOS', 'created_at' => '2025-04-17 02:20:42', 'updated_at' => '2025-04-17 02:20:42'],
            // ID 10
            ['idCategoria' => 10, 'nombreCategoria' => 'MOUSE', 'created_at' => '2025-04-17 02:20:42', 'updated_at' => '2025-04-17 02:20:42'],
            // ID 11
            ['idCategoria' => 11, 'nombreCategoria' => 'AMD', 'created_at' => '2025-04-17 02:23:19', 'updated_at' => '2025-04-17 02:23:19'],
            // ID 12
            ['idCategoria' => 12, 'nombreCategoria' => 'INTEL', 'created_at' => '2025-04-17 02:23:19', 'updated_at' => '2025-04-17 02:23:19'],
            // ID 13
            ['idCategoria' => 13, 'nombreCategoria' => 'VENTILADORES', 'created_at' => '2025-04-17 02:24:04', 'updated_at' => '2025-04-17 02:24:04'],
            // ID 14
            ['idCategoria' => 14, 'nombreCategoria' => 'DISIPADORES', 'created_at' => '2025-04-17 02:24:04', 'updated_at' => '2025-04-17 02:24:04'],
            // ID 15
            ['idCategoria' => 15, 'nombreCategoria' => 'CHASIS', 'created_at' => '2025-04-17 02:25:28', 'updated_at' => '2025-04-17 02:25:28'],
            // ID 16
            ['idCategoria' => 16, 'nombreCategoria' => 'DIADEMAS', 'created_at' => '2025-04-17 02:25:28', 'updated_at' => '2025-04-17 02:25:28'],
            // ID 17
            ['idCategoria' => 17, 'nombreCategoria' => 'MICROFONOS', 'created_at' => '2025-04-17 02:26:43', 'updated_at' => '2025-04-17 02:26:43'],
            // ID 18
            ['idCategoria' => 18, 'nombreCategoria' => 'CAMARAS', 'created_at' => '2025-04-17 02:26:43', 'updated_at' => '2025-04-17 02:26:43'],
        ]);
        
        // Ajustamos el AUTO_INCREMENT después del ID 18
        DB::statement('ALTER TABLE categoria AUTO_INCREMENT = 19;');
    }
}
