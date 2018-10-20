<?php

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
$dotenv->load();

$setting = require __DIR__ . '/../bootstrap/settings.php';

$app = new Slim\App([
    'settings' => $setting
]);

// Setup Dependencies
require __DIR__ . '/container.php';

// Register middleware
require __DIR__ . '/middleware.php';

// Register routes
require __DIR__ . '/route.php';

return $app;