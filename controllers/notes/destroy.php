<?php

use Core\Database;

$config = require(basePath('config.php'));
$db = new Database($config['database']);

$id = $_POST['id'];
$pageTitle = "Note {$id}";

$currentUserId = 2;

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
