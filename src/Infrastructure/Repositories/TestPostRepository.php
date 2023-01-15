<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Post\Post;
use App\Domain\Post\PostRepository;
class TestPostRepository implements PostRepository
{
    private array $posts;

    public function __construct(array $posts = null)
    {
        $this->posts  = $posts ?? [
            1 => new Post(1, 'My favourite recipes', 'Really long text about recipes...', 12),
            2 => new Post(1, 'The best countries in the world', 'Really long text about countries...', 3),
            3 => new Post(1, 'Work hard, get better', 'Really long text about self-development...', 65),
        ];
    }

    public function findAll(): array
    {
        return array_values($this->posts);
    }

    public function findById(int $id): Post
    {
        return $this->posts[$id];
    }
}