<?php

namespace Provider;


use App\Contracts\ServiceContainerInterface;
use Slim\Container;
use Slim\Http\Environment;

class EnvironmentService implements ServiceContainerInterface
{

    /**
     * Get ioc service.
     *
     * @param Container $container
     *
     * @return mixed
     * @throws \Interop\Container\Exception\ContainerException
     */
    public function __invoke(Container $container)
    {
        $scriptName = $_SERVER['SCRIPT_NAME'];
        $_SERVER['SCRIPT_NAME'] = dirname(dirname($scriptName)) . '/' . basename($scriptName);
        return new Environment($_SERVER);
    }
}