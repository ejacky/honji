<?php
namespace Honji\Provider;

use Pimple\ServiceProviderInterface;
use Pimple\Container;

class RoutingProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container['router'] = new \Router($container);
        $container['route'] = new \Route($container);

        return $container;
    }
}