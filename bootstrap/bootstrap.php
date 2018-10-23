<?php

use App\App;
use Dotenv\Dotenv;
use Noodlehaus\Config;

require_once __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Load env File
|--------------------------------------------------------------------------
|
| Config .env file don't track with CVS like git and created from
| .env.example template. Dotenv load it from root directory of project.
|
*/
$dotenv = (new Dotenv(__DIR__ . '/..'))->load();

/*
|--------------------------------------------------------------------------
| Load Config Files
|--------------------------------------------------------------------------
|
| All application configs placed in {ROOT_DIR}/config/.
| and application need load before create instance form it.
| We load all file in config directory by bootstrap project.
|
*/
$config = new Config(__DIR__ . '/../config');

$app = new App();

$capsule = $app->bootDataBase(
    $config->get('database')
);


// Register middleware
require __DIR__ . '/middleware.php';

// Register routes
require __DIR__ . '/route.php';

return $app;