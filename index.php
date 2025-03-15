<?php 

require('helpers.php');
require('router.php');
require('Database.php');

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

$db = new Database();
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);;

// print_r($posts);

foreach ($posts as $post) {
  echo "<li>{$post['title']}</li>";
}


