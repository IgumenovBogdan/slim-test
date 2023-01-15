<?php

declare(strict_types=1);

namespace App\Application\Services;

use App\Infrastructure\Repositories\TestPostRepository;
use Psr\Container\ContainerInterface;

class PostService
{
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getUsers(): array
    {
        return $this->container->get(TestPostRepository::class)->findAll();
    }
}