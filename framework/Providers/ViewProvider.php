<?php

namespace Honji\Provider;

use Honji\Core\View;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ViewProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container['view'] = new View($container);

        return $container;
    }
}
