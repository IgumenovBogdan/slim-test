<?php

declare(strict_types=1);

namespace App\Infrastructure\Controllers;

use App\Application\Services\PostService;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class PostController
{
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function index(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $response->getBody()->getMetadata($this->container->get(PostService::class)->getUsers());

        return $response;
    }
}