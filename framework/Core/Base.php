<?php
namespace Honji\Core;

use Pimple\Container;

abstract class Base
{
    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function __get($name)
    {
        return $this->container[$name];
    }

    public static function getInstance(Container $container)
    {
        return new static($container);
    }
}