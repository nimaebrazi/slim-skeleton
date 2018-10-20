<?php

use Provider\DatabaseService;
use Provider\EnvironmentService;
use Provider\LoggerService;
use Provider\PdoService;

$container = $app->getContainer();

$container['environment'] = new EnvironmentService();
$container['logger'] = new LoggerService();
$container['db'] = new DatabaseService();
$container['pdo'] = new PdoService();