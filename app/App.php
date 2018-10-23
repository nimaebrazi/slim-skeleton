<?php


namespace App;

use DI\Bridge\Slim\App as Application;
use DI\ContainerBuilder;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Capsule\Manager as Capsule;

class App extends Application
{
    /**
     * Add container config to container builder.
     *
     * @param ContainerBuilder $builder
     */
    protected function configureContainer(ContainerBuilder $builder)
    {
        $builder->addDefinitions(__DIR__ . './../bootstrap/container.php');
    }

    /**
     * Boot database with global access in whole of project.
     *
     * @param array $config
     * @return Capsule
     */
    public function bootDataBase(array $config): Manager
    {
        $capsule = new Capsule();
        $capsule->addConnection($config);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        return $capsule;
    }
}