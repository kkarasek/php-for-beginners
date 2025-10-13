<?php

use Core\App;
use Core\Database;

// Database usage before the implementation of a custom Service Container
// $config = require(basePath('config.php'));
// $db = new Database($config['database']);

// $db = App::container()->resolve(Database::class);
$db = App::resolve(Database::class);

// $id = $_GET['id'];
// var_dump($id);
// die();

$pageTitle = 'My Notes';

$notes = $db->query('SELECT * FROM notes WHERE user_id = 2')->get();

// var_dump($notes);
// die();

view('notes/index.view.php', [
  'pageTitle' => $pageTitle,
  'notes' => $notes
]);
