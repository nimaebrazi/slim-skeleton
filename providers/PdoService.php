<?php

namespace Provider;


use App\Contracts\ServiceContainerInterface;
use Slim\Container;

class PdoService implements ServiceContainerInterface
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
        return $container->get('db')->getPdo();
    }
}