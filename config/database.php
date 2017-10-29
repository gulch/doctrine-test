<?php

return [
    'driver'   => env('DB_DRIVER', 'pdo_mysql'),
    'host'     => env('DB_HOST', 'localhost'),
    'user'     => env('DB_USER', 'root'),
    'password' => env('DB_PASS'),
    'dbname'   => env('DB_NAME'),
];
