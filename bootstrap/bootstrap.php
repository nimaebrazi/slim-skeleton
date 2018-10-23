<?php

use App\App;
use Noodlehaus\Config;
use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = (new Dotenv(__DIR__ . '/..'))->load();
$config = new Config(__DIR__ . '/../config');


$app = new App();

$capsule = new Illuminate\Database\Capsule\Manager();
$capsule->addConnection(
    $config->get('database')
);
$capsule->setAsGlobal();
$capsule->bootEloquent();


// Register middleware
require __DIR__ . '/middleware.php';

// Register routes
require __DIR__ . '/route.php';

return $app;