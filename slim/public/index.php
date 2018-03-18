<?php
# Creates routes that deal with request and response objects.
# Slim supports psr 7.
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

# Created by composer that allows using Slim dependencies.
require '../vendor/autoload.php';
#
require '../src/config/db.php';

# Creates main Slim object.
$app = new \Slim\App;
# This is similar to using node.js and Express.
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

# Notifications route
require '../src/routes/notifications.php';

$app->run();

