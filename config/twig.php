<?php

return [
    'twig' => [
        'path'          => $settings['root'] . '/templates',
        'cache_enabled' => false,
        'cache_path'    => $settings['temp'] . '/twig-cache'
    ]
];