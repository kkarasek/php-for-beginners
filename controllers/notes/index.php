<?php

$config = require(basePath('config.php'));
$db = new Database($config['database']);

// $id = $_GET['id'];

// var_dump($id);
// die();

$pageTitle = "My Notes";

$notes = $db->query('select * from notes where user_id = 2')->get();

// var_dump($notes);
// die();

view("notes/index.view.php", [
  'pageTitle' => $pageTitle,
  'notes' => $notes
]);
