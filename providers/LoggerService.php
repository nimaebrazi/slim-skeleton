<?php

namespace Provider;


use App\Contracts\ServiceContainerInterface;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Slim\Container;

class LoggerService implements ServiceContainerInterface
{

    /**
     * Get ioc service.
     *
     * @param Container $container
     *
     * @return mixed
     *
     * @throws \Interop\Container\Exception\ContainerException
     */
    public function __invoke(Container $container)
    {
        $settings = $container->get('settings')['logger'];
        $logger = new Logger($settings['name']);
        $logger->pushProcessor(new UidProcessor());
        $logger->pushHandler(new StreamHandler($settings['path'], $settings['level']));
        return $logger;
    }
}