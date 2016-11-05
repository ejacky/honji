<?php
namespace Honji\Provider;

use Pimple\ServiceProviderInterface;
use Pimple\Container;
use Honji\Core\View;

class ViewProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container['route'] = new View($container);

        return $container;
    }
}