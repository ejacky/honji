<?php
namespace Honji\Core;

class Router extends Base
{
    public function dispatch(Request $requeset)
    {
        return $this->route;
    }
}