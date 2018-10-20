<?php


namespace App;


use App\Contracts\HttpAction;
use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class HomeAction implements HttpAction
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

    /**
     * Execute action with HTTP protocol.
     *
     * @param Request $request
     * @param Response $response
     * @param array $args
     *
     * @return mixed
     */
    public function execute(Request $request, Response $response, array $args)
    {
        $response->getBody()->write("It works! This is the default welcome page.");
        return $response;
    }
}