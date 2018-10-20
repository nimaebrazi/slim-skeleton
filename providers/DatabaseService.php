<?php

namespace Provider;


use App\Contracts\ServiceContainerInterface;
use Illuminate\Database\Connectors\ConnectionFactory;
use Slim\Container;

class DatabaseService implements ServiceContainerInterface
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
        $dbSettings = $container->get('settings')['database'];

        $config = [
            'driver'    => 'mysql',
            'host'      => $dbSettings['host'],
            'database'  => $dbSettings['database'],
            'username'  => $dbSettings['username'],
            'password'  => $dbSettings['password'],
            'charset'   => $dbSettings['charset'],
            'collation' => $dbSettings['collation'],
        ];

        $factory = new ConnectionFactory(new \Illuminate\Container\Container());

        $connection = $factory->make($config);

        // Disable the query log to prevent memory issues
        $connection->disableQueryLog();

        return $connection;
    }
}