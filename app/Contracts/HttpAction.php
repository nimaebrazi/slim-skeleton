<?php

namespace App\Contracts;


use Slim\Http\Request;
use Slim\Http\Response;

interface HttpAction
{
    /**
     * Execute action with HTTP protocol.
     *
     * @param Request $request
     * @param Response $response
     * @param array $args
     *
     * @return mixed
     */
    public function execute(Request $request, Response $response, array $args);
}