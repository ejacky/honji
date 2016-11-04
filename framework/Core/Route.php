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
        foreach ($this->routes as $path => $route) {
            if ($path == $this->parseUri($uri)) {
                list($controller, $action) = explode('@', $route);
                $this->controller = $controller;
                $this->action = $action;
                return $this;
            }
        }
        $this->controller = 'DashController';
        $this->action = 'index';

        return $this;
    }

    protected function parseUri($uri)
    {
        return preg_replace('/^\//', '', $uri);
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function runController()
    {

        return $this->controller;

    }
}