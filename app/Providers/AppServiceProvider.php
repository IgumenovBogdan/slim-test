<?php

namespace Lib\Providers;

use App\Application\Services\PostService;
use App\Infrastructure\Repositories\TestPostRepository;
use DI\Container;

class AppServiceProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container->set('testPostRepository', function () {
            return new TestPostRepository();
        });

        $container->set('postService', function () {
            return new PostService(new TestPostRepository());
        });
    }
}