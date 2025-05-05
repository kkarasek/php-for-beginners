<?php

const BASE_PATH = __DIR__ . '/../';

require(BASE_PATH . 'Core/helpers.php');

spl_autoload_register(function($class) {
  require basePath("Core/{$class}.php");
});

require(basePath('Core/router.php'));

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
