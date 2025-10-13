<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id = $_POST['id'];
$pageTitle = "Note {$id}";

$currentUserId = 2;

$note = $db->query(
  'SELECT * FROM notes WHERE id = :id',
  ['id' => $id]
)->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query('DELETE FROM notes WHERE id = :id', [
  'id' => $id
]);

header('location: /notes');
die();
