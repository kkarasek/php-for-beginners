<?php

use Core\App;
use Core\Database;


$db = App::resolve(Database::class);

$id = $_GET['id'];
$pageTitle = 'Edit Note';

$currentUserId = 2;

$note = $db->query( 
  'select * from notes where id = :id',
  ['id' => $id]
)->findOrFail();

authorize($note['user_id'] === $currentUserId);

view('notes/edit.view.php', [
  'pageTitle' => $pageTitle,
  'errors' => [],
  'success' => '',
  'note' => $note
]);
