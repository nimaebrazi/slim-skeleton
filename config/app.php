<?php


return [
    'settings.responseChunkSize'                 => 4096,
    'settings.outputBuffering'                   => 'append',
    'settings.determineRouteBeforeAppMiddleware' => false,
    'settings.displayErrorDetails'               => (bool)env('APP_DEBUG', true),
    'settings.root'                              => dirname(__DIR__),
];