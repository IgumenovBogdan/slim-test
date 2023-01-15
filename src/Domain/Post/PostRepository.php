<?php

declare(strict_types=1);

namespace App\Domain\Post;

interface PostRepository
{
    public function findAll(): array;

    public function findById(int $id): Post;
}