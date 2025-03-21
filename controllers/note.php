<?php

$config = require('config.php');
$db = new Database($config['database']);


$id = $_GET['id'];

$pageTitle = "Note {$id}";

// var_dump($_GET['id']);
// die();

$note = $db->query('select * from notes where id = :id', ['id' => $id])->fetch();

require "views/note.view.php";