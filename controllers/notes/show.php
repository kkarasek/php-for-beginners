<?php

use Core\Database;

$config = require(basePath('config.php'));
$db = new Database($config['database']);

$id = $_GET['id'];
$pageTitle = "Note {$id}";

$currentUserId = 2;

// var_dump($_GET['id']);
// die();

$note = $db->query('select * from notes where id = :id', 
  ['id' => $id]
)->findOrFail();

authorize($note['user_id'] === $currentUserId);

view("notes/show.view.php", [
  'pageTitle' => $pageTitle,
  'note' => $note
]);