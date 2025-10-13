<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$pageTitle = 'Create a Note';
$errors = [];
$success = ''; 

if (!Validator::string($_POST['body'], 1, 250)) {
  $errors['body'] = 'A body of no more than 250 characters is required!';
}

if (empty($errors)) {
  $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => 2
  ]);

  $success = 'Note created successfully!';
}

return view('notes/create.view.php', [
  'pageTitle' => $pageTitle,
  'errors' => $errors,
  'success' => $success
]);
