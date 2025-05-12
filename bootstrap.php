<?php

use Core\Container;
use Core\Database;

$container = new Container();

$container->bind("Core\Database", function () {
  $config = require basePath("config.php");

  return new Database($config["database"]);
});

$db = $container->resolve("Core\Database");

dd($db);
// $container->resolve('dadsaddasda');