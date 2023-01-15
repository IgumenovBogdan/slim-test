<?php

declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

return function (App $app) {
    $app->get('/', function (Request $request, Response $response, $args) {
        if ($this->has('postService')) {
            $response->getBody()->write('Hello World!');
        }
        return $response;
    });

    $app->get('/posts', 'App\Infrastructure\Controllers\PostController:index');
};