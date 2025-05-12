<?php

use Core\Database;
use Core\Router;

const BASE_PATH = __DIR__ . '/../';

require(BASE_PATH . 'Core/helpers.php');

spl_autoload_register(function($class) {
  $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
  require basePath("{$class}.php");
});

require(basePath('bootstrap.php'));

$router = new Router(); 

$routes = require(basePath("routes.php"));
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

$config = require(basePath('config.php'));


// connect to MySQL database.

// class Person {

//   public $name;
//   public $age;

//   public function breathe() {
//     echo "$this->name is alive 🙋‍♂️";
//   }
// }

// $person = new Person();
// $person->name = 'John Doe';
// $person->age = '25';

// print_r($person->breathe());

$query = 'select * from posts';
// $id = $_GET['id'];

$db = new Database($config['database']);
// $posts = $db->query($query, [':id' => $id])->fetch();
$posts = $db->query($query)->get();

// print_r($posts);
// die();

// foreach ($posts as $post) {
//   echo "<li>{$post['title']}</li>";
// }
