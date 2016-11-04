<?php
namespace Honji\Core;

class Route
{

    protected $routes = [];

    public function addRoute($uri, $controller, $action)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'action' => $action
        ];

        return $this;
    }

    public function findRoute($uri)
    {
        foreach ($this->routes as $route) {

        }

        return [];

    }
}