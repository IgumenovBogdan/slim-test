<?php

namespace Lib\Providers;

use App\Domain\Post\PostRepository;
use App\Infrastructure\Repositories\TestPostRepository;
use DI\ContainerBuilder;
use function DI\autowire;

class AppRepositoryProvider implements RepositoryProviderInterface
{
    public function register(ContainerBuilder $containerBuilder)
    {
        $containerBuilder->addDefinitions([
            PostRepository::class => autowire(TestPostRepository::class)
        ]);
    }
}