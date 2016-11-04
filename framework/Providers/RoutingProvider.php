<?php
namespace Honji\Provider;

use Pimple\ServiceProviderInterface;
use Pimple\Container;

class RoutingProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        // TODO: Implement register() method.
        $container['router'] = new \Router($container);
        $container['route'] = new \Route($container);

    }
}