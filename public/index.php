<?php

declare(strict_types=1);

use App\Application\Services\PostService;
use App\Domain\Post\PostRepository;
use App\Infrastructure\Repositories\TestPostRepository;
use function DI\autowire;
use DI\ContainerBuilder;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$containerBuilder = new ContainerBuilder();

$containerBuilder->addDefinitions([
    PostRepository::class => autowire(TestPostRepository::class)
]);

$container = $containerBuilder->build();

AppFactory::setContainer($container);
$app = AppFactory::create();

$container->set('testPostRepository', function () {
    return new TestPostRepository();
});

$container->set('postService', function () {
    return new PostService(new TestPostRepository());
});

$routes = require __DIR__ . '/../app/routes.php';
$routes($app);

$app->run();