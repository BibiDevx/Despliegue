<?php

namespace Database\Seeders;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder

{

    public function run(): void

    {

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
        ]);
    }
}