<?php


namespace App;


use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class HomeAction
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * HomeAction constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function execute(Request $request, Response $response, array $args)
    {
        $response->getBody()->write("It works! This is the default welcome page. filan");
        return $response;
    }
}