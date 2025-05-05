<?php

$routes = require(basePath("routes.php"));

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function routeToController($uri, $routes) {
  if(array_key_exists($uri, $routes)) {
    require basePath($routes[$uri]);
  } else {
    abort();
  }
}

function abort($statusCode = 404) {
  http_response_code($statusCode);
  require basePath("views/{$statusCode}.php");
  die();
}

routeToController($uri, $routes);