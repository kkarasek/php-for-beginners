<?php

namespace Core;

class Router
{
  protected $routes = [];

  public function get($uri, $controller)
  {
    $this->add('GET',$uri, $controller);
  }

  public function post($uri, $controller)
  {
    $this->add('POST',$uri, $controller);

  }

  public function delete($uri, $controller)
  {
    $this->add('DELETE',$uri, $controller);

  }

  public function patch($uri, $controller)
  {
    $this->add('PATCH',$uri, $controller);

  }

  public function put($uri, $controller)
  {
    $this->add('PUT',$uri, $controller);

  }

  public function route($uri, $method)
  {
    foreach ($this->routes as $route) {
      if (
        $route["uri"] === $uri &&
        $route["method"] === strtoupper($method)
      ) {
        return require basePath($route["controller"]);
      }
    }
    $this->abort();
  }

  protected function add($method, $uri, $controller)
  {
    $this->routes[] = [
      "uri" => $uri,
      "controller" => $controller,
      "method" => $method,
    ];
    // Or use alternative syntax
    // $this->routes[] = compact('method', 'uri', 'controller');
  }

  protected function abort($statusCode = 404)
  {
    http_response_code($statusCode);
    require basePath("views/{$statusCode}.php");
    die();
  }
}