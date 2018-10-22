<?php

return [
    'database' => [
        'host'      => env('DB_HOST', 'localhost'),
        'username'  => env('DB_USERNAME', 'root'),
        'password'  => env('DB_PASSWORD', 'secret'),
        'database'  => env('DB_DATABASE', ''),
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci'
    ]
];