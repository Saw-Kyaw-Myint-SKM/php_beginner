<?php

$config = require 'config.php';
$db = new Database($config['database']);
$notes = $db->query('select * from notes')->fetchAll();
// dd($notes);

$heading = 'Notes';

require 'views/notes.view.php';
