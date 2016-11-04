<?php
namespace Honji\Core;

class Route
{

    protected $routes = [];

    public function addRoute($uri, $action)
    {
        $this->routes[$uri] = $action;

        return $this;
    }

    public function findRoute($uri)
    {
        foreach ($this->routes as $route) {

        }

        return [];
    }

    public function getRoutes()
    {
        return array_values($this->routes);
    }
}