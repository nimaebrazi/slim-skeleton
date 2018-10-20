<?php

$settings = [];

// Slim settings
$settings['displayErrorDetails'] = (bool)getenv('APP_DEBUG');
$settings['determineRouteBeforeAppMiddleware'] = true;

// Path settings
$settings['root'] = dirname(__DIR__);
$settings['temp'] = $settings['root'] . '/tmp';
$settings['public'] = $settings['root'] . '/public';
$settings['config'] = $settings['root'] . '/config';


$configs = get_dir_contents($settings['config']);
foreach ($configs as $fileName)
{
    $key = remove_file_extension($fileName, ".php");
    $settings[$key] = require_once $settings['config'] . '/' . $fileName . '';
}

return $settings;