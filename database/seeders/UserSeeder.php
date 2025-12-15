<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        // Limpia la tabla antes de insertar
        DB::table('users')->truncate();

        $users = [
            // idRol 3: ¿Super Admin?
            [
                'idUsuario' => 1,
                'email' => 'admin@admin.com',
                'password' => '$2y$12$wfH0WPh15EojpatD1Aw16.ojASF9fxKHvtDkqjxywm65XPmVLtOlG',
                'idRol' => 3, 
                'created_at' => '2025-04-03 23:20:37', 
                'updated_at' => '2025-04-19 01:58:18',
            ],
            // idRol 1: Cliente
            [
                'idUsuario' => 2,
                'email' => 'perez@example.com',
                'password' => '$2y$12$rozrV6l6Bwna3DOpqk/JSe6NKh42kLP1jsVmmITzhVrNFyuVsQZG6',
                'idRol' => 1, 
                'created_at' => '2025-04-03 23:21:12', 
                'updated_at' => '2025-04-03 23:21:12',
            ],
            // idRol 2: Admin
            [
                'idUsuario' => 3,
                'email' => 'mini@prueba.com',
                'password' => '$2y$12$lcffKjB0j0L3EresvAfV6eHA9pnZG0c3IY2w1uAbC0jL2m4tHI/xS',
                'idRol' => 2, 
                'created_at' => '2025-04-05 05:18:29', 
                'updated_at' => '2025-04-17 04:30:42',
            ],
            // idRol 3: ¿Super Admin?
            [
                'idUsuario' => 4,
                'email' => 'super@admin.com',
                'password' => '$2y$12$Onsw.X2agETWFQBUqOuf/uP7maqxALWBz4MtjPA7pfY8BZLuV20yG',
                'idRol' => 3, 
                'created_at' => '2025-04-17 09:13:27', 
                'updated_at' => '2025-04-17 09:24:56',
            ],
            // idRol 3: ¿Super Admin?
            [
                'idUsuario' => 5,
                'email' => 'master@admin.com',
                'password' => '$2y$12$tFtTVnt/buBkQZ6hxrw6aOOaXcaKarj2rL0bdzKmbNw5T4MR2R8Jq',
                'idRol' => 3, 
                'created_at' => '2025-04-17 09:15:59', 
                'updated_at' => '2025-04-17 09:25:10',
            ],
            // idRol 2: Admin
            [
                'idUsuario' => 6,
                'email' => 'root@prueba.com',
                'password' => '$2y$12$ZyZqk9dvfQsnYXHZOI3X4Oe9QP1Cb6Ib/O8bhfobUZzTQRxo/PWT6',
                'idRol' => 2, 
                'created_at' => '2025-04-17 09:16:15', 
                'updated_at' => '2025-04-17 04:30:33',
            ],
            // idRol 2: Admin
            [
                'idUsuario' => 7,
                'email' => 'ex@prueba.com',
                'password' => '$2y$12$9pr1ONU0v2u9jT6EDetDn.eYo3rZ5Nm/nVoE2PVMde1YGSwonDmOq',
                'idRol' => 2, 
                'created_at' => '2025-04-17 09:17:27', 
                'updated_at' => '2025-04-19 06:58:22',
            ],
            // idRol 2: Admin
            [
                'idUsuario' => 8,
                'email' => 'example@prueba.com',
                'password' => '$2y$12$sYvQuOqHUX0uev9.93uxPuORj1FCYqUslBh9QlbT3I1.JmOwm5bVi',
                'idRol' => 2, 
                'created_at' => '2025-04-17 09:18:35', 
                'updated_at' => '2025-04-17 09:18:35',
            ],
            // idRol 1: Cliente
            [
                'idUsuario' => 11,
                'email' => 'laura.gomez@example.com',
                'password' => '$2y$12$Gf5rU5SEuCiQGxdWJ/7gPueXprxOZayG6ukPtuDAz45FAqKsZ0RC.',
                'idRol' => 1, 
                'created_at' => '2025-04-19 05:26:47', 
                'updated_at' => '2025-04-19 05:26:47',
            ],
            // idRol 1: Cliente
            [
                'idUsuario' => 12,
                'email' => 'carlos.ramirez@example.com',
                'password' => '$2y$12$fdBCapflWa4fTGwgzlZnu.vWo6/YMrww.jMs36ObKDqQYrcDBFwIm',
                'idRol' => 1, 
                'created_at' => '2025-04-19 05:27:31', 
                'updated_at' => '2025-04-19 05:27:31',
            ],
            // idRol 1: Cliente
            [
                'idUsuario' => 13,
                'email' => 'diana.martinez@example.com',
                'password' => '$2y$12$xTDU7R.MS.PdsxevXJC2je/jdwC.DWGBd/xUAfdOxaPwMxThq0XTm',
                'idRol' => 1, 
                'created_at' => '2025-04-19 05:27:41', 
                'updated_at' => '2025-04-19 05:27:41',
            ],
            // idRol 1: Cliente
            [
                'idUsuario' => 14,
                'email' => 'andres.lopez@example.com',
                'password' => '$2y$12$3DbKeAMQrQnJdjGdkkSnUup8VvgAdfbI5vVjJJHfBCchHgppZapxO',
                'idRol' => 1, 
                'created_at' => '2025-04-19 05:27:47', 
                'updated_at' => '2025-04-19 05:27:47',
            ],
            // idRol 1: Cliente
            [
                'idUsuario' => 15,
                'email' => 'test@prueba.com',
                'password' => '$2y$12$.Xm9mm.UNJE3qa6pF.ZePuJa5MjhHVKV8WQRM7gl9sEfeclthY8je',
                'idRol' => 1, 
                'created_at' => '2025-04-23 01:39:15', 
                'updated_at' => '2025-04-23 01:39:15',
            ],
            // idRol 2: Admin
            [
                'idUsuario' => 17,
                'email' => 'xd@gmail.com',
                'password' => '$2y$12$1CgUfDPiiilDBEujoyRal.rhBycbbgpiR8cCVrXnsimkrHvR/NQcS',
                'idRol' => 2, 
                'created_at' => '2025-06-07 05:30:18', 
                'updated_at' => '2025-06-07 05:32:51',
            ],
        ];

        DB::table('usuario')->insert($users);

        // 3. Ajuste del contador AUTO_INCREMENT
        // El último ID usado es 17, el siguiente debe ser 18.
        DB::statement('ALTER TABLE usuario AUTO_INCREMENT = 18;');
        
        // 4. Reactivación de FK
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
