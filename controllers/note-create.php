<?php

$config = require('config.php');
$db = new Database($config['database']);

$pageTitle = "Create a Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $errors = [];
  $success = '';

  if (strlen($_POST['body']) === 0) {
    $errors['body'] = 'A body is required!';
  }

  if (strlen($_POST['body']) > 250) {
    $errors['body'] = 'The body cannot be more than 250 characters!';
  }

  if (empty($errors)) {
    $db->query('INSERT INTO notes (body, user_id) VALUES(:body, :user_id)', [
      'body' => $_POST['body'],
      'user_id' => 2
    ]);

    $success = 'Note created successfully!';
  }
}

require('views/note-create.view.php');
