<?php
namespace Honji\Core;

class Route
{

    protected $routes = [];

    protected $controller;

    protected $action;

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
        $className = $this->getControllerName();

        $object = new $className;
        $object->{$this->action}();

        return $this->controller;

    }

    protected function getControllerName()
    {
        $className = 'App\Controllers\\' . $this->controller;

        if (! class_exists($className)) {
            throw new \RuntimeException('Controller not found');
        }

        if (! method_exists($className, $this->action)) {
            throw new \RuntimeException('Action not found');
        }

        return $className;
    }
}