<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin')->truncate(); 

        DB::table('admin')->insert([
            [
                'idAdmin' => 1, 
                'idUsuario' => 1, 
                'cedulaAdmin' => '12345678', 
                'nombreAdmin' => 'admin', 
                'apellidoAdmin' => 'admin', 
                'telefonoAdmin' => '3123456789', 
                'created_at' => '2025-04-03 23:20:37', 
                'updated_at' => '2025-04-19 06:37:04'
            ],
            [
                'idAdmin' => 2, 
                'idUsuario' => 3, 
                'cedulaAdmin' => '12346789', 
                'nombreAdmin' => 'miniAdmin', 
                'apellidoAdmin' => 'admin', 
                'telefonoAdmin' => '3123456789', 
                'created_at' => '2025-04-05 05:18:29', 
                'updated_at' => '2025-04-17 09:51:05'
            ],
            [
                'idAdmin' => 3, 
                'idUsuario' => 4, 
                'cedulaAdmin' => '111', 
                'nombreAdmin' => 'Super', 
                'apellidoAdmin' => 'Admin', 
                'telefonoAdmin' => '3123456789', 
                'created_at' => '2025-04-17 09:13:27', 
                'updated_at' => '2025-04-17 09:13:27'
            ],
            [
                'idAdmin' => 4, 
                'idUsuario' => 5, 
                'cedulaAdmin' => '222', 
                'nombreAdmin' => 'master', 
                'apellidoAdmin' => 'Admin', 
                'telefonoAdmin' => '3123456789', 
                'created_at' => '2025-04-17 09:15:59', 
                'updated_at' => '2025-04-17 09:15:59'
            ],
            [
                'idAdmin' => 5, 
                'idUsuario' => 6, 
                'cedulaAdmin' => '333', 
                'nombreAdmin' => 'root', 
                'apellidoAdmin' => 'Admin', 
                'telefonoAdmin' => '3123456789', 
                'created_at' => '2025-04-17 09:16:15', 
                'updated_at' => '2025-04-17 09:16:15'
            ],
            [
                'idAdmin' => 6, 
                'idUsuario' => 7, 
                'cedulaAdmin' => '444', 
                'nombreAdmin' => 'prueba', 
                'apellidoAdmin' => 'Admin', 
                'telefonoAdmin' => '3123456789', 
                'created_at' => '2025-04-17 09:17:27', 
                'updated_at' => '2025-04-17 09:17:27'
            ],
            [
                'idAdmin' => 7, 
                'idUsuario' => 8, 
                'cedulaAdmin' => '555', 
                'nombreAdmin' => 'example', 
                'apellidoAdmin' => 'Admin', 
                'telefonoAdmin' => '3123456789', 
                'created_at' => '2025-04-17 09:18:35', 
                'updated_at' => '2025-04-17 09:18:35'
            ],
            [
                'idAdmin' => 10, 
                'idUsuario' => 17, 
                'cedulaAdmin' => '666', 
                'nombreAdmin' => 'xd', 
                'apellidoAdmin' => 'xd', 
                'telefonoAdmin' => '3323456789', 
                'created_at' => '2025-06-07 05:30:18', 
                'updated_at' => '2025-06-07 05:30:18'
            ],
        ]);
        
        // Ajustamos el AUTO_INCREMENT después del ID 10
        DB::statement('ALTER TABLE admin AUTO_INCREMENT = 11;');
    }
}
