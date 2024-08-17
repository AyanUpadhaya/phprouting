<?php
require "functions.php";
$config = require ('config.php');
$db = new Database($config['database'], 'root', '');
$notes = $db->query(' select * from notes')->fetchAll();
// dd($notes);
require "views/notes.view.php";