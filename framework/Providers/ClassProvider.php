<?php
namespace Honji\Provider;

use Pimple\ServiceProviderInterface;
use Pimple\Container;

class ClassProvider implements ServiceProviderInterface
{
    private $classes = [
        'Core' => [
            'Request',
            'Response',
        ]
    ];

    public function register(Container $container)
    {
        //$this->buildDIC($container, $this->classes);
        return $this;
    }

    public function buildDIC(Container $container, array $namespaces)
    {
        foreach ($namespaces as $namespace => $classes) {
            foreach ($classes as $name) {
                $class = '\\Honji\\'.$namespace.'\\'.$name;
                $container[lcfirst($name)] = function ($c) use ($class) {
                    return new $class($c);
                };
            }
        }

        return $container;
    }
}