<?php

$pageTitle = "Create a Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  var_dump($_POST);
  die();
}

require('views/note-create.view.php');
