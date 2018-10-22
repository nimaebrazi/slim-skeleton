<?php

$app->get('/test', function (\Psr\Http\Message\ResponseInterface $response) {
    $message = "It works! This is the default welcome page.";
    return $response->getBody()->write($message);
});