<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categoriaproducto')->truncate(); 

        // Datos de la tabla pivote categoriaproducto (Producto ID, Categoria ID)
        DB::table('categoriaproducto')->insert([
            // Producto 1: BOARD ASUS B550M-A AC WIFI
            ['idProducto' => 1, 'idCategoria' => 1], // BOARDS
            
            // Producto 2: SanDisk Extreme Portable SSD 1TB
            ['idProducto' => 2, 'idCategoria' => 3], // ALMACENAMIENTO
            
            // Producto 3: Thermaltake Smart BX1 650W 80+ Bronze
            ['idProducto' => 3, 'idCategoria' => 8], // FUENTES
            
            // Producto 4: XPG PYLON 650W 80+ Bronze
            ['idProducto' => 4, 'idCategoria' => 8], // FUENTES
            
            // Producto 5: Intel Core i5-12400F
            ['idProducto' => 5, 'idCategoria' => 7], // PROCESADORES
            ['idProducto' => 5, 'idCategoria' => 12], // INTEL
            
            // Producto 6: Intel Core i5-13400
            ['idProducto' => 6, 'idCategoria' => 7], // PROCESADORES
            ['idProducto' => 6, 'idCategoria' => 12], // INTEL
            
            // Producto 7: Teclado Mecánico Redragon Kumara K552
            ['idProducto' => 7, 'idCategoria' => 6], // PERIFERICOS
            ['idProducto' => 7, 'idCategoria' => 9], // TECLADOS
            
            // Producto 8: Mouse Logitech G203 Lightsync
            ['idProducto' => 8, 'idCategoria' => 6], // PERIFERICOS
            ['idProducto' => 8, 'idCategoria' => 10], // MOUSE
            
            // Producto 9: AMD Ryzen 5 5600X
            ['idProducto' => 9, 'idCategoria' => 7], // PROCESADORES
            ['idProducto' => 9, 'idCategoria' => 11], // AMD
            
            // Producto 10: AMD Ryzen 7 5800X
            ['idProducto' => 10, 'idCategoria' => 7], // PROCESADORES
            ['idProducto' => 10, 'idCategoria' => 11], // AMD
            
            // Producto 11, 12, 13, 14 son BOARDS
            ['idProducto' => 11, 'idCategoria' => 1], // BOARDS
            ['idProducto' => 12, 'idCategoria' => 1], // BOARDS
            ['idProducto' => 13, 'idCategoria' => 1], // BOARDS
            ['idProducto' => 14, 'idCategoria' => 1], // BOARDS
            
            // Producto 15, 16, 17 son CHASIS
            ['idProducto' => 15, 'idCategoria' => 15], // CHASIS
            ['idProducto' => 16, 'idCategoria' => 15], // CHASIS
            ['idProducto' => 17, 'idCategoria' => 15], // CHASIS
            
            // Producto 18, 19, 20 son MONITORES
            ['idProducto' => 18, 'idCategoria' => 5], // MONITORES
            ['idProducto' => 19, 'idCategoria' => 5], // MONITORES
            ['idProducto' => 20, 'idCategoria' => 5], // MONITORES
            
            // Producto 21: Teclado Touch Inalámbrico Logitech K400 Smart Tv
            ['idProducto' => 21, 'idCategoria' => 6], // PERIFERICOS
            ['idProducto' => 21, 'idCategoria' => 9], // TECLADOS
        ]);
    }
}
