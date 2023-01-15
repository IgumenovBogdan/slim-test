<?php

declare(strict_types=1);

use App\Application\Services\PostService;
use App\Domain\Post\PostRepository;
use App\Infrastructure\Repositories\TestPostRepository;
use function DI\autowire;
use function DI\get;

return [
    TestPostRepository::class => autowire(PostRepository::class),

    PostService::class => autowire()
        ->constructorParameter('postRepository', get(TestPostRepository::class))
];