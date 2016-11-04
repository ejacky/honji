<?php
namespace Honji;

use Pimple\Container;

class Application extends Container
{
    public function __construct(array $values = array())
    {
        parent::__construct($values);
    }

    public function handle($request)
    {
        return $this['router']->dispatch($request);
    }
}