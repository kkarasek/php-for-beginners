<?php

$config = require('config.php');
$db = new Database($config['database']);

// $id = $_GET['id'];

// var_dump($id);
// die();

$pageTitle = "My Notes";

$notes = $db->query('select * from notes where user_id = 2')->fetchAll();

// var_dump($notes);
// die();

require "views/notes.view.php";