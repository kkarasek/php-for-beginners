<?php

function urlIs($value) {
  return $_SERVER['REQUEST_URI'] === $value;
};

function authorize($condition, $status = Response::FORBIDDEN){
  if (! $condition) {
    abort($status);
  }
}

?>