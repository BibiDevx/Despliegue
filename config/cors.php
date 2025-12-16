<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Orígenes Permitidos (Allowed Origins)
    |--------------------------------------------------------------------------
    */

    // Rutas a las que se aplica el CORS (normalmente todas las rutas de la API)
    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'], // Permite todos los métodos (GET, POST, etc.)

    // ¡CRÍTICO! Añadir la URL de tu frontend de Vercel
    'allowed_origins' => [
        'https://despligue-front.vercel.app', 
        'http://localhost:3000', // Para tu desarrollo local
        'http://127.0.0.1:3000', 
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];