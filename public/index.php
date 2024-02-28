<?php
declare(strict_types=1);
// php -S localhost:8080 -t public/ typ in terminal in vs code
use Slim\Factory\AppFactory;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require dirname(__dir__) . '/vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response) {

    $response->getbody()->write("Hello World!");

    return $response;

});

$app->run();