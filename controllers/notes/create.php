<?php

require('Validator.php');

$config = require('config.php');
$db = new Database($config['database']);

$pageTitle = "Create a Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $errors = [];
  $success = '';

  if (!Validator::string($_POST['body'], 1, 250)) {
    $errors['body'] = 'A body of no more than 250 characters is required!';
  }

  if (empty($errors)) {
    $db->query('INSERT INTO notes (body, user_id) VALUES(:body, :user_id)', [
      'body' => $_POST['body'],
      'user_id' => 2
    ]);

    $success = 'Note created successfully!';
  }
}

require('views/notes/create.view.php');
