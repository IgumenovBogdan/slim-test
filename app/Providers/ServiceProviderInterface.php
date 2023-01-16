<?php

namespace Lib\Providers;

use DI\Container;

interface ServiceProviderInterface
{
    public function register(Container $container);
}