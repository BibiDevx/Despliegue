<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rol')->truncate(); 

        DB::table('rol')->insert([
            // ID 1
            ['idRol' => 1, 'nombre' => 'Cliente', 'created_at' => now(), 'updated_at' => now()],
            // ID 2
            ['idRol' => 2, 'nombre' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
            ['idRol' => 3, 'nombre' => 'SuperAdmin', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Aseguramos que el AUTO_INCREMENT comience después del 2
        DB::statement('ALTER TABLE rol AUTO_INCREMENT = 3;');
    }
}
