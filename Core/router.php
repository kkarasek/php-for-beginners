<?php

namespace Core;

use Core\Middleware\Middleware;

class Router
{
    public $routes = [];

    public function get($uri, $controller)
    {
        return $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        return $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        return $this->add('DELETE', $uri, $controller);
    }

    public function patch($uri, $controller)
    {
        return $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller)
    {
        return $this->add('PUT', $uri, $controller);
    }

    public function only($key)
    {
        //  Each only() call targets the most recently added route at the time it's called.
        //  It doesn't overwrite previous middleware assignments - it creates separate middleware assignments for different routes.
        //  So /notes gets 'auth' middleware and /register gets 'guest' middleware - they're completely separate operations on different routes.

        // count($this->routes) - 1 equals N (the route we just added)
        $this->routes[count($this->routes) - 1]['middleware'] = $key;

        return $this;
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if (
                $route['uri'] === $uri &&
                $route['method'] === strtoupper($method)
            ) {
                (new Middleware())->resolve($route['middleware']);

                return require basePath('Http/controllers/' . $route['controller']);
            }
        }
        $this->abort();
    }

    protected function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null,
        ];
        // Or use alternative syntax
        // $this->routes[] = compact('method', 'uri', 'controller');

        return $this;
    }

    public function previousUrl()
    {
        return $_SERVER['HTTP_REFERER'];
    }

    protected function abort($statusCode = 404)
    {
        http_response_code($statusCode);
        require basePath("views/{$statusCode}.php");
        die();
    }
}