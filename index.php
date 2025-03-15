<?php 

require('helpers.php');

require('router.php');

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

$dsn = "mysql:host=localhost;port=3306;user=root;dbname=myapp;charset=utf8mb4";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// print_r($posts);

foreach ($posts as $post) {
  echo "<li>{$post['title']}</li>";
}


