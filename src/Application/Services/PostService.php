<?php

declare(strict_types=1);

namespace App\Application\Services;

use App\Infrastructure\Repositories\TestPostRepository;

class PostService
{
    private TestPostRepository $postRepository;

    public function __construct(TestPostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getUsers(): array
    {
        return $this->postRepository->findAll();
    }
}