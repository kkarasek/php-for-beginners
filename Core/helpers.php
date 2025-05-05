<?php

use Core\Response;

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

function basePath($path)
{
  return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
  extract($attributes);
  require basePath("views/" . $path);
}
