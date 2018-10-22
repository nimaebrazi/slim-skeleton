<?php

use Psr\Container\ContainerInterface;

return [

    'environment' => function (ContainerInterface $container) {
        $scriptName = $_SERVER['SCRIPT_NAME'];
        $_SERVER['SCRIPT_NAME'] = dirname(dirname($scriptName)) . '/' . basename($scriptName);
        return new \Slim\Http\Environment($_SERVER);
    },

    'logger' => function (ContainerInterface $container) {
        $settings = $container->get('logger');
        $logger = new \Monolog\Logger($settings['name']);
        $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
    },

    \Slim\Interfaces\RouteInterface::class          => function (ContainerInterface $container) {
        return $container->get('router');
    },

    \Psr\Http\Message\ServerRequestInterface::class => function (ContainerInterface $c) {
        return \Slim\Http\Request::createFromEnvironment($c->get('environment'));
    },

    \Psr\Http\Message\ResponseInterface::class => function (ContainerInterface $c) {
        $headers = new \Slim\Http\Headers(['Content-Type' => 'text/html; charset=UTF-8']);
        $response = new \Slim\Http\Response(200, $headers);
        return $response->withProtocolVersion($c->get('settings')['httpVersion']);
    },

];