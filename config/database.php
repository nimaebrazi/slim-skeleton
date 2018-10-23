<?php

return [
    'database' => [
        'driver'    => env('DB_CONNECTION', 'mysql'),
        'host'      => env('DB_HOST', 'localhost'),
        'username'  => env('DB_USERNAME', ''),
        'password'  => env('DB_PASSWORD', ''),
        'database'  => env('DB_DATABASE', ''),
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci'
    ]
];