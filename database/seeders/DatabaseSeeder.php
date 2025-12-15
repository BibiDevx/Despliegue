<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder

{

    public function run(): void

    {   
        // 1. DESACTIVAR LA VERIFICACIÓN DE CLAVES FORÁNEAS
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call([

            // Dependencias de Usuario

            RolSeeder::class,      
            UserSeeder::class,    
            AdminSeeder::class,    
            ClienteSeeder::class,  
            // Tablas Base de Inventario
            CategoriaSeeder::class,
            MarcaSeeder::class,    
            ProveedorSeeder::class,
            ProductoSeeder::class,
            CategoriaProductoSeeder::class,
            // Tablas de Transacciones (Pedidos/Ventas)
            PedidoSeeder::class,
            PedidoProductoSeeder::class,
            FacturaSeeder::class, // <-- ¡AÑADIDO AQUÍ!
            // 2. ACTIVAR LA VERIFICACIÓN DE CLAVES FORÁNEAS
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}