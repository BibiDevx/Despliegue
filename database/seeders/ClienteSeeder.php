<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // 1. Limpia la tabla
        DB::table('cliente')->truncate(); 

        // 2. Inserta los datos del cliente
        DB::table('cliente')->insert([
            // idUsuario 2 (Juana Pérez)
            [
                'idCliente' => 1, 
                'idUsuario' => 2, 
                'cedulaCliente' => '1234567890', 
                'nombreCliente' => 'Juana', 
                'apellidoCliente' => 'Perez', 
                'telefonoCliente' => '3219876543', 
                'direccionCliente' => 'Calle 10 # 5-20',
                'created_at' => '2025-04-03 23:21:12', 
                'updated_at' => '2025-04-19 06:48:10'
            ],
            // idUsuario 11 (Laura Gomez)
            [
                'idCliente' => 2, 
                'idUsuario' => 11, 
                'cedulaCliente' => '1000000001', 
                'nombreCliente' => 'Laura', 
                'apellidoCliente' => 'Gomez', 
                'telefonoCliente' => '3001234567', 
                'direccionCliente' => 'Carrera 7 # 15-30',
                'created_at' => '2025-04-19 05:26:47', 
                'updated_at' => '2025-04-19 05:26:47'
            ],
            // idUsuario 12 (Carlos Ramirez)
            [
                'idCliente' => 3, 
                'idUsuario' => 12, 
                'cedulaCliente' => '1000000002', 
                'nombreCliente' => 'Carlos', 
                'apellidoCliente' => 'Ramirez', 
                'telefonoCliente' => '3012345678', 
                'direccionCliente' => 'Avenida 80 # 45-10',
                'created_at' => '2025-04-19 05:27:31', 
                'updated_at' => '2025-04-19 05:27:31'
            ],
            // idUsuario 13 (Diana Martinez)
            [
                'idCliente' => 4, 
                'idUsuario' => 13, 
                'cedulaCliente' => '1000000003', 
                'nombreCliente' => 'Diana', 
                'apellidoCliente' => 'Martinez', 
                'telefonoCliente' => '3023456789', 
                'direccionCliente' => 'Transversal 50 # 2-80',
                'created_at' => '2025-04-19 05:27:41', 
                'updated_at' => '2025-04-19 05:27:41'
            ],
            // idUsuario 14 (Andres Lopez)
            [
                'idCliente' => 5, 
                'idUsuario' => 14, 
                'cedulaCliente' => '1000000004', 
                'nombreCliente' => 'Andres', 
                'apellidoCliente' => 'Lopez', 
                'telefonoCliente' => '3034567890', 
                'direccionCliente' => 'Diagonal 25 # 77-12',
                'created_at' => '2025-04-19 05:27:47', 
                'updated_at' => '2025-04-19 05:27:47'
            ],
            // idUsuario 15 (Prueba C)
            [
                'idCliente' => 6, 
                'idUsuario' => 15, 
                'cedulaCliente' => '1000000005', 
                'nombreCliente' => 'Test', 
                'apellidoCliente' => 'Client', 
                'telefonoCliente' => '3045678901', 
                'direccionCliente' => 'Calle Falsa 123',
                'created_at' => '2025-04-23 01:39:15', 
                'updated_at' => '2025-04-23 01:39:15'
            ],
        ]);
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // 3. Ajustamos el AUTO_INCREMENT después del ID 6
        DB::statement('ALTER TABLE cliente AUTO_INCREMENT = 7;');
    }
}
