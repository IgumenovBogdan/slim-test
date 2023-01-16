<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use Lib\Providers\AppRepositoryProvider;
use Lib\Providers\AppServiceProvider;
use Lib\Providers\RepositoryProviderInterface;
use Lib\Providers\ServiceProviderInterface;

$repositories = [
    AppRepositoryProvider::class
];

$containerBuilder = new ContainerBuilder();

foreach ($repositories as $className) {
    if (!class_exists($className)) {
        throw new Exception('Provider ' . $className . ' not found');
    }
    $provider = new $className;
    if (!$provider instanceof RepositoryProviderInterface) {
        throw new Exception($className . ' has not provider');
    }
    $provider->register($containerBuilder);
}

$services = [
    AppServiceProvider::class
];

$container = $containerBuilder->build();

foreach ($services as $className) {
    if (!class_exists($className)) {
        throw new Exception('Provider ' . $className . ' not found');
    }
    $provider = new $className;
    if (!$provider instanceof ServiceProviderInterface) {
        throw new Exception($className . ' has not provider');
    }
    $provider->register($container);
}

return $container;