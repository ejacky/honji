<?php

namespace Honji\Provider;

use Honji\Core\Route;
use Honji\Core\Router;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class RoutingProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container['router'] = new Router($container);
        $container['route'] = new Route($container);

        require_once __DIR__.'/../../routes/web.php';

        return $container;
    }
}
