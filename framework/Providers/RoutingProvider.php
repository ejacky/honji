<?php
namespace Honji\Provider;

use Pimple\ServiceProviderInterface;
use Pimple\Container;
use Honji\Core\Router;
use Honji\Core\Route;

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