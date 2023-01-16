<?php

declare(strict_types=1);

namespace App\Infrastructure\Controllers;

use App\Application\Services\PostService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class PostController
{
    private PostService $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $response->getBody()->write(json_encode($this->postService->getUsers()));

        return $response;
    }
}