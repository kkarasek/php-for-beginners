<?php

use Core\Database;

$config = require(basePath('config.php'));
$db = new Database($config['database']);

$id = $_GET['id'];
$pageTitle = "Note {$id}";

$currentUserId = 25;

// var_dump($_GET['id']);
// die();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $note = $db->query(
    'select * from notes where id = :id',
    ['id' => $id]
  )->findOrFail();

  authorize($note['user_id'] === $currentUserId);

  $db->query('DELETE from notes where id = :id', [
    'id' => $id
  ]);

  header('location: /notes');
  die();
} else {
  $note = $db->query(
    'select * from notes where id = :id',
    ['id' => $id]
  )->findOrFail();

  authorize($note['user_id'] === $currentUserId);

  view("notes/show.view.php", [
    'pageTitle' => $pageTitle,
    'note' => $note
  ]);
}
