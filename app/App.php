<?php


namespace App;

use \DI\Bridge\Slim\App as Application;
use DI\ContainerBuilder;

class App extends Application
{
    protected function configureContainer(ContainerBuilder $builder)
    {
        $builder->addDefinitions(__DIR__ . './../bootstrap/container.php');
    }

}