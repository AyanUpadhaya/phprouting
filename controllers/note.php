<?php
require "functions.php";
$config = require ('config.php');
$db = new Database($config['database'], 'root', '');
$id = isset($_GET['id']) ? intval($_GET['id']) : null;
$note = $db->query('select * from notes where id = :id', ['id' => $id])->fetch();

require "views/note.view.php";