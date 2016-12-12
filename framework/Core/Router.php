<?php

namespace Honji\Core;

class Router extends Base
{
    public function dispatch(Request $request)
    {
        $uri = $request->getRequestUri();

        return $this->route->findRoute($uri);
    }
}
