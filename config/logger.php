<?php

return [
    'name'  => 'slim-app',
    'path'  => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
    'level' => \Monolog\Logger::DEBUG,
];