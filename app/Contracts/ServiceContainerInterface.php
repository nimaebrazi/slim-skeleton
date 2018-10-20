<?php

namespace App\Contracts;


use Slim\Container;

interface ServiceContainerInterface
{
    /**
     * Get ioc service.
     *
     * @param Container $container
     *
     * @return mixed
     * @throws \Interop\Container\Exception\ContainerException
     */
    public function __invoke(Container $container);
}