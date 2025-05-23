<?php

use Core\Response;

function dd($value)
{
    var_dump($value);
    die();
}

function urlIs($value)
{
  return $_SERVER["REQUEST_URI"] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN)
{
  if (!$condition) {
    abort($status);
  }
}

function abort($statusCode = 404)
{
  http_response_code($statusCode);
  require basePath("views/{$statusCode}.php");
  die();
}

function basePath($path)
{
  return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
  extract($attributes);
  require basePath("views/" . $path);
}
