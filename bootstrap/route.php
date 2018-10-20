<?php

$app->get('/', \App\HomeAction::class . ':execute')->setName('root');


$app->get('/db-test', function (\Slim\Http\Request $request, \Slim\Http\Response $response) {

    $db = $this->get('db');

    // fetch all rows as collection
    $rows = $db->table('information_schema.schemata')->get();

    // return a json response
    return $response->withJson($rows);
});