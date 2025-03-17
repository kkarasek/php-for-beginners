<?php 

require('helpers.php');
// require('router.php');
require('Database.php');

$config = require('config.php');

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

$query = 'select * from posts where id = :id';
$id = $_GET['id'];

$db = new Database($config['database']);
$posts = $db->query($query, [':id' => $id])->fetch();;

print_r($posts);
die();

foreach ($posts as $post) {
  echo "<li>{$post['title']}</li>";
}


