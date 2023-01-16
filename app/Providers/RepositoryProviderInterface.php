<?php

namespace Lib\Providers;

use DI\ContainerBuilder;

interface RepositoryProviderInterface
{
    public function register(ContainerBuilder $containerBuilder);
}