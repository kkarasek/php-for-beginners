<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$pageTitle = 'Edit Note';

$id = $_POST['id'];
$body = $_POST['body'];

$currentUserId = 2;
$errors = [];

$note = $db->query(
  'select * from notes where id = :id',
  ['id' => $id]
)->findOrFail();

authorize($note['user_id'] === $currentUserId);

if (!Validator::string($body, 1, 250)) {
  $errors['body'] = 'A body of no more than 250 characters is required!';
}

if (count($errors)) {
  return view("notes/edit.view.php", [
    'pageTitle' => $pageTitle,
    'errors' => $errors,
    'note' => $note
  ]); 
}

$db->query('update notes set body = :body where id = :id', [
  'body' => $body,
  'id' => $id
]);

header('location: /notes');
die();
