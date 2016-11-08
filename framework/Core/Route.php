<?php
namespace Honji\Core;

class Route extends Base
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
                if (! is_string($route) ) {
                    $this->runCallable($route);
                }
                $this->runController($route);

                return $this;
            }
        }

        throw new \Exception('找不到路由');
    }

    protected function runCallable($route)
    {

    }

    protected function runController($route)
    {
        list($controller, $action) = explode('@', $route);
        $this->controller = $controller;
        $this->action = $action;
    }

    protected function parseUri($uri)
    {
        return ltrim($uri, '/');
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function send()
    {
        $className = $this->getControllerName();

        $instance = new $className;
        $parameters = []; //todo

        return call_user_func_array([$instance, $this->action], $parameters);

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